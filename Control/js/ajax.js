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
	var reqURL = "../Model/book.php?BookID=" + elem.value;
	var request = $.ajax({
		url: reqURL,
		method: "GET",
		dataType: "json"
	});
	request.done(function(BookInfo) {
		console.log('Pass');
		console.table(BookInfo);
		BookID.value = BookInfo[0].BookID;
		AuthorName.value = BookInfo[0] Name + ' ' + BookInfo[0] Surname;
		BookTitle.value = BookInfo[0].Title;
		Genre.value = BookInfo[0].Genre;
		YearOfPublication.value = BookInfo[0].YearOfPublication;
		Summary.value = BookInfo[0].Summary;

	});
	request.fail(function(err) {
		console.log(err);
		console.log('An error occured');

	});
}

//  Ajax Updated Statement
// $("#UpdateJob").click(
//   function UpdatedJob() {
//     $.ajax({
//
//       url: '../Model/JobUpdate.php',
//       type: 'POST',
//       data: $("#ViewJob").serialize(),
//       success: function(result) {
//         alert('Update Was Successful');
//       }
//     });
//   });


function OpenAsset(elem) {
	var reqURL = "../Model/AssetGet.php?OpenAsset=" + elem.value;
	var request = $.ajax({
		url: reqURL,
		method: "GET",
		dataType: "json"
	});
	request.done(function(AssetInfo) {
		console.log('Pass');
		console.log(AssetInfo);
		Type.value = AssetInfo[0].Type;
		AssetID.value = AssetInfo[0].AssetID;
		Brand.value = AssetInfo[0].Brand;
		Model.value = AssetInfo[0].Model;
		Serial_Number.value = AssetInfo[0].Serial_Number;
		LocationID.value = AssetInfo[0].BuildingName + ' - Room ' + AssetInfo[0].RoomName;
		DateIntroduced.value = AssetInfo[0].DateIntroduced;
		DateWrittenOff.value = AssetInfo[0].DateWrittenOff;

	});
	request.fail(function(err) {
		console.log(err);
		console.log('An error occured');

	});
}
