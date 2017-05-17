    </main>
    <footer class="site-footer" role="contentinfo">
      <?php snippet('footer1'); ?>
      <?php snippet('footer2'); ?>
    </footer>

    <?= js('assets/scripts/main.js', true); ?>

    <script type="text/javascript">
    /*! squeezebox.js || crunched on 2014-06-18 */
    !function(a,b){"use strict";function c(b,c){return a.getComputedStyle(b).getPropertyValue(c)}function d(a,b){for(var c in b)a.setAttribute(c,b[c])}function e(a,b){return Array.prototype.filter.call(a.parentNode.children,function(c){return c!==a&&c.classList.contains(b)})}var f=function(a){if(this.wrapperEl=".squeezebox",this.headersClass="squeezhead",this.foldersClass="squeezecnt",this.closeOthers=!0,this.speed=".7s",a)for(var b in a)this[b]=a[b]};f.prototype={init:function(){var a=this;this.wrapper=b.querySelectorAll(this.wrapperEl),Array.prototype.forEach.call(this.wrapper,function(b){a.getHeights(b),a.setListeners(b)})},getHeights:function(a){for(var b,e,f=this,g=a.getElementsByClassName(f.foldersClass),h=g.length;h--;)b=g[h],e=b.style,e.position="absolute",e.visibility="hidden",e.display="",e.transition="",f.showEl(b),d(b,{"data-sq_h":c(b,"height"),"data-sq_pt":c(b,"padding-top"),"data-sq_pb":c(b,"padding-bottom")}),e.position="relative",e.visibility="visible",f.hideEl(b),f.addTran(b)},addTran:function(a){var b=this;setTimeout(function(){a.style.transition="all "+b.speed},100)},hideEl:function(a){var b=a.style;b.maxHeight=0,b.paddingTop=0,b.paddingBottom=0,a.setAttribute("aria-hidden","true")},showEl:function(a){var b=a.style;b.maxHeight=a.getAttribute("data-sq_h"),b.paddingTop=a.getAttribute("data-sq_pt"),b.paddingBottom=a.getAttribute("data-sq_pb"),a.setAttribute("aria-hidden","false")},hideSibl:function(a){var b=this;Array.prototype.forEach.call(e(a,b.foldersClass),function(a){b.hideEl(a)})},setListeners:function(a){var b=this;a.addEventListener("click",function(c){for(var d=c.target;d&&!d.classList.contains(b.headersClass);)if(d=d.parentNode,d===a)return;b.clickedEl=d,b.toggle(d.nextElementSibling)})},toggle:function(a){"false"===a.getAttribute("aria-hidden")?(this.hideEl(a),this.fireCallback(a,"onClose")):(this.closeOthers&&this.hideSibl(a),this.showEl(a),this.fireCallback(a,"onOpen"))},fireCallback:function(a,b){this[b]?this[b](this.wrapper,this.clickedEl,a):null}},a.Squeezebox=f}(window,document);

    var squeezebox = new Squeezebox();
    squeezebox.init();

    </script>

  </body>
</html>
