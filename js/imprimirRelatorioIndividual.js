// document.getElementById('btnd').onclick = function() {
//     window.print();
// };

function printFrameContent(id) {
    alert("AAAAAAAAAAAAAA");
    var cFrame = document.getElementById(id).contentWindow;
    cFrame.focus();
    cFrame.print();
    return false;
}