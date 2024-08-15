
function doMenu() {
  // console.log("Yep, You selected an option!");
  let url = menu.value;
  if (url!="") {
    // console.log(menu.value);
    if (url.includes("http")) {
      window.open(url);
    } else {
      location.href = url;
    }
  }
}