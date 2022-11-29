document.getElementById("btn_open").addEventListener("click", open_cls_menu);

var menu = document.getElementById("menu");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");

function open_cls_menu() {
	body.classList.toggle("body_move");
	menu.classList.toggle("menu_move");
}
