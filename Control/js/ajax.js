function CheckEmail(val) {
  var reqURL = "../Model/CheckEmail.php?email=" + val;
  $.ajax({
    url: reqURL,
    method: "GET",
    dataType: "json",
    success: function(result) {
      console.log(result);
    },
    error(err) {
      console.log(err);
      console.log('An error occured');
    }
  });
}

// BookModal

function OpenBook(elem) {
  console.log(elem.value);
  var reqURL = "../Model/book.php?BookID=" + elem.value;
  var request = $.ajax({
    url: reqURL,
    method: "GET",
    dataType: "json"
  });
  request.done(function(BookInfo) {
    console.log('Pass');
    console.table(BookInfo);
    // BookID.value = BookInfo.BookID;
    AuthorName.value = BookInfo.Name + ' ' + BookInfo.Surname;
    BookTitle.value = BookInfo.BookTitle;
    Genre.value = BookInfo.Genre;
    LanguageWrittenIn.value = BookInfo.LanguageWritten;
    YearOfPublication.value = BookInfo.YearofPublication;
    Summary.value = BookInfo.Plot;
    MillionsSold.value = BookInfo.MillionsSold;

  });
  request.fail(function(err) {
    console.log(err);
    console.log('An error occured');

  });
}