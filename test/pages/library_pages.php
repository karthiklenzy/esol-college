<div class="content" style="padding-bottom: 0px;background-image: url('images/back-cloud.jpg');background-size: cover;background-position: center;">
  <div class="container-fluid">
    <div class="col-md-12" style="height: auto">
      <section class="posts" style="padding-bottom: 0px;">
        <div class="library_page" style="width:100%">
          <div class="dashboard_panel">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#"><h5><i class="fas fa-user"></i><?= $_SESSION['student_name']; ?>&emsp;</h5></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= HTTP_PATH;?>library-logout"><h5><i class="fas fa-sign-out-alt"></i>Logout&emsp;</h5></a>
                  </li>
                  
                </ul>
                <span class="clock"></span>
              </div>
            </nav>
            <div class="styleforh2 library_heading">
              <h2>E-Books Stack</h2>
            </div>
            <div class="col-md-3 nopadding" id="buttons">
              <aside class="sidebar_pdf" >
                <ul class="nav nav-pills nav-stacked">
                  <?php if ($category_name) {
                    for ($y=0; $y < count($category_name); $y++) { 
                   $cat_id = $category_name[$y]['book_cat_id'];
                   // $cat_link_id = $_GET['cat_id'];
                   ?>
                  <li class="<?php if ($cat_id == $category_id) { echo "active";} ?>">
                   <a href="<?= HTTP_PATH;?>library?cat_id=<?= $cat_id; ?>">
                  <button class="<?php if ($cat_id == $category_id) { echo "btn-active ";} ?>btn btn-primary btn-round" id="<?= $category_name[$y]['book_cat_id']; ?>"><p><?php echo $category_name[$y]['book_cat_name']; ?><i class="fas fa-angle-double-right" id="fas-<?= $category_name[$y]['book_cat_id']; ?>"></i></p>
                    </button>
                    </a>
                  </li>

                 <?php }} ?>  
                </ul>
              </aside>
            </div>
            <div class="col-md-9">
              <div class="books">
                <ul>
                  <?php 
                    $book_array = array('cat_id' => $category_id);
                    $book_name_display = $db->query("SELECT lib_book_id, lib_book_name, lib_book_url, lib_book_image_url FROM tbl_lib_books WHERE book_cat_id = :cat_id",$book_array);

                      if ($book_name_display) {
                        for ($x=0; $x < count($book_name_display); $x++) { ?>
                        <div class="col-md-3 nopadding">
                          <a href="<?= HTTP_PATH.$book_name_display[$x]['lib_book_url']; ?>" target="_blank">
                            <li class="displaybook" id="<?= $book_name_display[$x]['lib_book_id']; ?>">
                              <img id="book-<?= $book_name_display[$x]['lib_book_id']; ?>" src="<?= HTTP_PATH.$book_name_display[$x]['lib_book_image_url']; ?>" class="book" style="width: 60%;">
                              <h4>
                                <?php echo substr($book_name_display[$x]['lib_book_name'], 0, 15); ?>
                              </h4>
                            </li>
                          </a>
                        </div>  
                  <?php
                        }
                      }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<div class="ebooks">
  <div class="component">
  <img class="owl-class" src="<?= HTTP_PATH; ?>images/owl.png">
  <img class="butter-class" src="<?= HTTP_PATH; ?>images/butter.png">
        <ul class="align">
          <!-- Book 1 -->
          <li>
            <figure class='book'>        
              <!-- Front -->        
              <ul class='hardcover_front'>
                <li>
                  <img src="<?= HTTP_PATH; ?>images/book-3-3.jpg" alt="" width="100%" height="100%">
                  <span class="ribbon bestseller">Nº1</span>
                </li>
                <li></li>
              </ul>        
              <!-- Pages -->        
              <ul class='page'>
                <li></li>
                <li>
                  <a class="btn" href="http://test.esol.lk/uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf" target="_blank">Download</a>
                </li>
                <li></li>
                <li></li>
                <li></li>
              </ul>        
              <!-- Back -->        
              <ul class='hardcover_back'>
                <li></li>
                <li></li>
              </ul>
              <ul class='book_spine'>
                <li></li>
                <li></li>
              </ul>
              
            </figure>
          </li>  
          <!-- Book 2 -->
          <li>
            <figure class='book'>        
              <!-- Front -->        
              <ul class='hardcover_front'>
                <li>
                  <img src="<?= HTTP_PATH; ?>images/book-2-2.jpg" alt="" width="100%" height="100%">
                  <span class="ribbon new">NEW</span>
                </li>
                <li></li>
              </ul>        
              <!-- Pages -->        
              <ul class='page'>
                <li></li>
                <li>
                  <a class="btn" href="http://test.esol.lk/uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf" target="_blank">Download</a>
                </li>
                <li></li>
                <li></li>
                <li></li>
              </ul>        
              <!-- Back -->        
              <ul class='hardcover_back'>
                <li></li>
                <li></li>
              </ul>
              <ul class='book_spine'>
                <li></li>
                <li></li>
              </ul>
              
            </figure>
          </li>  
          <!-- Book 3 -->
          <li>
            <figure class='book'>       
              <!-- Front -->        
              <ul class='hardcover_front'>
                <li>
                  <img src="<?= HTTP_PATH; ?>images/book-3-3.jpg" alt="" width="100%" height="100%">
                </li>
                <li></li>
              </ul>        
              <!-- Pages -->        
              <ul class='page'>
                <li></li>
                <li>
                  <a class="btn" href="http://test.esol.lk/uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf" target="_blank">Download</a>
                </li>
                <li></li>
                <li></li>
                <li></li>
              </ul>        
              <!-- Back -->        
              <ul class='hardcover_back'>
                <li></li>
                <li></li>
              </ul>
              <ul class='book_spine'>
                <li></li>
                <li></li>
              </ul>
              
            </figure>
          </li>
        </ul>  
      </div>
</div>
<div class="content footer_image" style="padding-bottom: 0px;">
<img src="<?php echo HTTP_PATH; ?>images/footer-image2.png">
</div>
  <script>
    $('ul.nav-pills li a').click(function (e) {
  $('.tab-content .tab-pane.active').removeClass('active')
  $(this).parent('.tab-pane').addClass('active')
})
  </script>
  <script>
    
var Clock = (function(){

  var exports = function(element) {
    this._element = element;
    var html = '';
    for (var i=0;i<6;i++) {
      html += '<span>&nbsp;</span>';
    }
    this._element.innerHTML = html;
    this._slots = this._element.getElementsByTagName('span');
    this._tick();
  };

  exports.prototype = {

    _tick:function() {
      var time = new Date();
      this._update(this._pad(time.getHours()) + this._pad(time.getMinutes()) + this._pad(time.getSeconds()));
      var self = this;
      setTimeout(function(){
        self._tick();
      },1000);
    },

    _pad:function(value) {
      return ('0' + value).slice(-2);
    },

    _update:function(timeString) {

      var i=0,l=this._slots.length,value,slot,now;
      for (;i<l;i++) {

        value = timeString.charAt(i);
        slot = this._slots[i];
        now = slot.dataset.now;

        if (!now) {
          slot.dataset.now = value;
          slot.dataset.old = value;
          continue;
        }

        if (now !== value) {
          this._flip(slot,value);
        }
      }
    },

    _flip:function(slot,value) {

      // setup new state
      slot.classList.remove('flip');
      slot.dataset.old = slot.dataset.now;
      slot.dataset.now = value;

      // force dom reflow
      slot.offsetLeft;

      // start flippin
      slot.classList.add('flip');

    }

  };

  return exports;
}());

var i=0,clocks = document.querySelectorAll('.clock'),l=clocks.length;
for (;i<l;i++) {
  new Clock(clocks[i]);
}

  </script>
<script>
/*$("li").hover(
  function () {
    $(".book").addClass('book-shade');
  }, 
  function () {
    $(".book").removeClass("book-shade");
  }
);*/

$('.displaybook').mouseover(function() {
   var bookid = (this.id);
   $('#book-'+bookid).addClass('book-shade');
});

$('.displaybook').mouseout(function() {
   var bookid = (this.id);
   $('#book-'+bookid).removeClass("book-shade");
});

$('.btn-round').mouseover(function() {
   var fasid = (this.id);
   $('#fas-'+fasid).addClass('fashover');
});

$('.btn-round').mouseout(function() {
   var fasid = (this.id);
   $('#fas-'+fasid).removeClass("fashover");
});
</script>