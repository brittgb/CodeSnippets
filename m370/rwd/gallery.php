<?php include 'includes/top.php'; ?>

<!-- START Article (Chapter) -->
<article class="chapterOne">
  <h2>Down the Rabbit Hole</h2>
  <div class="flexslider">
          <ul class="slides">
            <li>
              <li data-thumb="http://flexslider.woothemes.com/images/kitchen_adventurer_cheesecake_brownie.jpg">
              <img src="http://flexslider.woothemes.com/images/kitchen_adventurer_cheesecake_brownie.jpg" />
            </li>
            <li>
              <li data-thumb="http://flexslider.woothemes.com/images/kitchen_adventurer_lemon.jpg">
              <img src="http://flexslider.woothemes.com/images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <li data-thumb="http://flexslider.woothemes.com/images/kitchen_adventurer_donut.jpg">
              <img src="http://flexslider.woothemes.com/images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <li data-thumb="http://flexslider.woothemes.com/images/kitchen_adventurer_donut.jpg">
              <img src="http://flexslider.woothemes.com/images/kitchen_adventurer_caramel.jpg" />
            </li>
          </ul>
        </div>
</article>
<!-- END Article (Chapter) -->

<!-- START Aside -->
<aside>
  <h2>'Who will Riddle me the How and the Why?'</h2>
    <p>So questions one of England's sweetest singers. The `How?' has already been told, after a fashion, in the verses prefixed to Alice in Wonderland ; and some other memories of that happy summer day are set down, for those who care to see them, in this little book--the germ that was to grow into the published volume. But the `Why?' cannot, and need not, be put into words. Those for whom a child's mind is a sealed book, and who see no divinity in a child's smile, would read such words in vain: while for any one that has ever loved one true child, no words are needed. For he will have known the awe that falls on one in the presence of a spirit fresh from GOD's hands, on whom no shadow of sin, and but the outermost fringe of the shadow of sorrow, has yet fallen: he will have felt the bitter contrast between the haunting selfishness that spoils his best deeds and the life that is but an overflowing love--for I think a child's first attitude to the world is a simple love for all living things: and he will have learned that the best work a man can do is when he works for love's sake only, with no thought of name, or gain, or earthly reward. No deed of ours, I suppose, on this side the grave, is really unselfish: yet if one can put forth all one's powers in a task where nothing of reward is hoped for but a little child's whispered thanks, and the airy touch of a little child's pure lips, one seems to come somewhere near to this.</p>
  <p>There was no idea of publication in my mind when I wrote this little book: that was wholly an afterthought, pressed on me by the `perhaps too partial friends' who always have to bear the blame when a writer rushes into print: and I can truly say that no praise of theirs has ever given me one hundredth part of the pleasure it has been to think of the sick children in hospitals (where it has been a delight to me to send copies) forgetting, for a few bright hours, their pain and weariness--perhaps thinking lovingly of the unknown writer of the tale--perhaps even putting up a childish prayer (and oh, how much it needs!) for one who can but dimly hope to stand, some day, not quite out of sight of those pure young faces, before the great white throne. `I am very sure,' writes a lady-visitor at a Home for Sick Children, `that there will be many loving earnest prayers for you on Easter morning from the children.' . </p>
  <p>Let me add--for I feel I have drifted into far too serious a vein for a preface to a fairy-tale--the deliciously naive remark of a very dear child-friend, whom I asked, after an acquaintance of two or three days, if she had read `Alice' and the `Looking-Glass'. `Oh yes,' she replied readily, `I've read both of them! And I think' (this more slowly and thoughtfully) `I think "Through the Looking-Glass" is more stupid than "Alice's Adventures". Don't you think so?' But this was a question I felt it would be hardly discreet for me to enter upon.</p>
  <p class="author">Lewis Carroll December, 1886</p>
</aside>
<!-- END Aside -->

 <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  
  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="js/shCore.js"></script>
  <script type="text/javascript" src="js/shBrushXml.js"></script>
  <script type="text/javascript" src="js/shBrushJScript.js"></script>
  
  <!-- Optional FlexSlider Additions -->
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>

 <?php include 'includes/bottom.php'; ?>


