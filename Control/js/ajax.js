// BookModal
// When you click on a book it starts this function, where it request information form another source.
function HomeOpenBook(elem) {
  console.log(elem.value);
  var reqURL = "../Model/book.php?BookID=" + elem.value;
  var request = $.ajax({
    url: reqURL,
    method: "GET",
    dataType: "json"
  });
  request.done(function(BookInfo) {
    // Prints information to console
    console.log('Pass');
    console.table(BookInfo);
    // Matchs the id's up with the information recieved from the AJAX request.
    document.getElementById("BoldBookTitle").innerHTML = BookInfo.BookTitle;
    BookID.value = BookInfo.BookID;
    document.getElementById("AuthorName").innerHTML = BookInfo.Name + ' ' + BookInfo.Surname;
    BookTitle.value = BookInfo.BookTitle;
    document.getElementById("Genre").innerHTML = BookInfo.Genre;
    document.getElementById("LanguageWrittenIn").innerHTML = BookInfo.LanguageWritten;
    document.getElementById("YearOfPublication").innerHTML = BookInfo.YearofPublication;
    document.getElementById("Summary").innerHTML = BookInfo.Plot;
    document.getElementById("MillionsSold").innerHTML = BookInfo.MillionsSold;

  });
  //Request failled Throw an error
  request.fail(function(err) {
    console.log(err);
    console.log('An error occured');

  });
}
// Admin AJAX Request Books Modal Information
function AdminOpenBook(elem) {
  console.log(elem.value);
  var reqURL = "../Model/book.php?BookID=" + elem.value;
  var request = $.ajax({
    url: reqURL,
    method: "GET",
    dataType: "json"
  });
  request.done(function(BookInfo) {
    // Prints information to console
    console.log('Pass');
    console.table(BookInfo);
    // Matchs the id's up with the information recieved from the AJAX request.
    document.getElementById("BoldBookTitle").innerHTML = BookInfo.BookTitle;
    BoldBookTitle.value = BookInfo.BookTitle;
    BookID.value = BookInfo.BookID;
    BookTitle.value = BookInfo.BookTitle;
    Genre.value = BookInfo.Genre;
    LanguageWrittenIn.value = BookInfo.LanguageWritten;
    YearOfPublication.value = BookInfo.YearofPublication;
    BookCover.value = BookInfo.Cover;
    MillionsSold.value = BookInfo.MillionsSold;

  });
  //Request failled Throw an error
  request.fail(function(err) {
    console.log(err);
    console.log('An error occured');

  });
}