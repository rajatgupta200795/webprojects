<style>
.toggle_class {
    display: inline-block;
    cursor: pointer;
}

.bar1, .bar2, .bar3 {
    width: 35px;
    height: 5px;
    background-color: #333;
    margin: 6px 0;
    transition: 0.4s;
}

.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px);
    transform: rotate(-45deg) translate(-9px, 6px);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px);
    transform: rotate(45deg) translate(-8px, -8px);
}
</style>

<script>
function myFunction(x) {
x.classList.toggle("change");
if ( document.getElementById("hide_left_admin_menu").classList.contains("hidden") ){
document.getElementById("mid_page_id").classList.add("col-sm-10");
document.getElementById("mid_page_id").classList.remove("col-sm-12");
document.getElementById("hide_left_admin_menu").classList.toggle("hidden");
}
else{
document.getElementById("mid_page_id").classList.add("col-sm-12");
document.getElementById("mid_page_id").classList.remove("col-sm-10");
document.getElementById("hide_left_admin_menu").classList.toggle("hidden");
}

}
</script>

<div class="toggle_class" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>