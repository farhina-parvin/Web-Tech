document.getElementById("addBtn").addEventListener("click", addBook);

function addBook() {
    let title = document.getElementById("title").value.trim();
    let year = document.getElementById("year").value.trim();
    let error = document.getElementById("error");

    error.textContent = "";  // Clear previous errors

    // Title: Only alphabets, no spaces
    let titlePattern = /^[A-Za-z]+$/;
    if (!titlePattern.test(title)) {
        error.textContent = "Title must contain only letters (no spaces, numbers, or symbols).";
        return;
    }

    // Year validation: 4 digits, between 1900 and current year
    let currentYear = new Date().getFullYear();
    if (!/^\d{4}$/.test(year) || year < 1900 || year > currentYear) {
        error.textContent = "Year must be a 4-digit number between 1900 and " + currentYear + ".";
        return;
    }

    // Add row to table
    let table = document.getElementById("bookTable");
    let row = table.insertRow(-1);

    let cell1 = row.insertCell(0);
    let cell2 = row.insertCell(1);

    cell1.textContent = title;
    cell2.textContent = year;

    // Row color
    if (year < 2000) {
        row.classList.add("old-book");
    } else {
        row.classList.add("new-book");
    }

    // Clear inputs
    document.getElementById("title").value = "";
    document.getElementById("year").value = "";
}
