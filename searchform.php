<?php

echo '
<style>
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }
  
  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    height: 80%
  }
  
  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(255,255,255, 0.75);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {z-index:99;}
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  
  }
  input#s {
    width: 50%;
    margin-left: auto;
    margin-right: auto;
    height: 200px;
    text-align: center;
    font-size: 2rem;
}
}
  </style>
<!-- The Modal -->
<div id="searchModal" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <form role="search" method="get" id="searchform" class="searchform" action="https://interworksdev.wpengine.com/"
        _lpchecked="1">
        <div>
            <label class="screen-reader-text" for="s" style="font-size:1.5rem;">Type below to search site</label><br>
            <input type="text" value="" name="s" id="s" class="aa-input" autocomplete="off" spellcheck="false"
                role="combobox" aria-autocomplete="list" aria-expanded="false"
                aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="">
            <pre aria-hidden="true"
                style="position: absolute; visibility: hidden; white-space: pre; font-family: Montserrat, Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
        </div>
    </form>
  </div>
</div>
<script>
var modal = document.getElementById("searchModal");
var btn = document.getElementsByClassName("search-icon")[0];
var btnMobile = document.getElementsByClassName("search-icon")[2];

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  openNav()
  modal.style.display = "block";
}
btnMobile.onclick = function() {
  openNav()
}

function openNav() {
  document.getElementById("searchModal").style.height = "100%";
}

function closeNav() {
  document.getElementById("searchModal").style.height = "0%";
}
</script>';

?>