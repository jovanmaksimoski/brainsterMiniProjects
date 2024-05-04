let books = [
  {
    title: "The Hobbit",
    author: "J.R.R. Tolkien",
    maxPages: 300,
    onPage: 150,
  },
  {
    title: "The Lord of the Rings",
    author: "J.R.R. Tolkien",
    maxPages: 1000,
    onPage: 500,
  },

  {
    title: "Cracking the coding interview",
    author: "Gayle Laakmann McDowell",
    maxPages: 678,
    onPage: 472,
  },
  {
    title: "Algorithms",
    author: "Robert Sedgewick , Kevin Wayne",
    maxPages: 976,
    onPage: 976,
  },
  {
    title: "Clean Code",
    author: "Robert Cecil Martin",
    maxPages: 464,
    onPage: 464,
  },
  {
    title: "Eloquent Javascript",
    author: "Marijn Haverbeke",
    maxPages: 472,
    onPage: 472,
  },
];

function renderBookList() {
  const bookListContainer = document.getElementById("bookList");
  bookListContainer.innerHTML = "";
  books.forEach((book) => {
    const listItem = document.createElement("li");
    listItem.textContent = `${book.title} by ${book.author}`;
    if (book.maxPages === book.onPage) {
      listItem.style.color = "green";
    } else {
      listItem.innerHTML = `<p>You still need to read ${book.title} by ${book.author}<p>`;
      listItem.style.color = "red";
    }
    bookListContainer.appendChild(listItem);
  });
}

function renderBookTable() {
  const tbody = document.querySelector("#bookTable tbody");
  tbody.innerHTML = "";
  books.forEach((book) => {
    const row = document.createElement("tr");
    const progress = (book.onPage / book.maxPages) * 100;

    row.innerHTML = `
    <td>${book.title}</td>
    <td>${book.author}</td>
    <td>${book.maxPages}</td>
    <td>${book.onPage}</td>
    <td>
      <div class="progress-bar">
      <div class="progress-bar-fill" style="width: ${progress}%">${progress.toFixed(
      2
    )}%</div>
      </div>
    </td>
  `;
    tbody.appendChild(row);
  });
}

document
  .getElementById("addBookForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const title = document.getElementById("title").value;
    const author = document.getElementById("author").value;
    const maxPages = parseInt(document.getElementById("maxPages").value);
    const onPage = parseInt(document.getElementById("onPage").value);
    const newBook = { title, author, maxPages, onPage };

    console.log(event);
    books.push(newBook);
    renderBookTable();
    renderBookList();

    document.getElementById("title").value = "";
    document.getElementById("author").value = "";
    document.getElementById("maxPages").value = "";
    document.getElementById("onPage").value = "";
  });

renderBookTable();
renderBookList();
