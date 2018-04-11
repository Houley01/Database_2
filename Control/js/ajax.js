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
// function OpenJob(elem) {
//   var reqURL = "../Model/JobGet.php?OpenJob=" + elem.value;
//   var request = $.ajax({
//     url: reqURL,
//     method: "GET",
//     dataType: "json"
//   });
//   request.done(function(JobInfo) {
//     console.log('Pass');
//     console.table(JobInfo);
//     JobID.value = JobInfo[0].JobID;
//     UserID.value = JobInfo[0]["F.Name"] + ' ' + JobInfo[0]["L.Name"]; // Due to the data in the repones json puts the name of the varable into a [""]
//     DateLogged.value = JobInfo[0].DateLogged;
//     RoomID.value = JobInfo[0].BuildingName + ' - Room ' + JobInfo[0].RoomName;
//     AssetID.value = JobInfo[0].AssetID;
//     Broken_Mouse.value = JobInfo[0].Broken_Mouse;
//     Broken_Keyboard.value = JobInfo[0].Broken_Keyboard;
//     Broken_Screen.value = JobInfo[0].Broken_Screen;
//     ExtraInfo.value = JobInfo[0].ExtraInfo;
//     JobStatusID.value = JobInfo[0].JobStatusName;
//     PartsUsed.value = JobInfo[0].PartsUsed;
//     DateComplete.value = JobInfo[0].DateComplete;
//
//   });
//   request.fail(function(err) {
//     console.log(err);
//     console.log('An error occured');
//
//   });
// }

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