<?php
/**
 * @package OS_Touch_Slider
 * @subpackage  mod_OS_TouchSlider
 * @copyright Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Sergey Bunyaev(sergey@bunyaev.ru); Sergey Solovyev(solovyev@solovyev.in.ua)
 * @Homepage: http://www.ordasoft.com
 * @version: 3.1
 * @license GNU General Public License version 2 or later; see LICENSE.txt
 **/
defined('_JEXEC') or die;
$numSlides = $params->get('countSlides');

?>

  <div id="osslider<?php echo $module->id;?>" class="touchSlider <?php echo ($show_type == 'horizontal') ? ' horizontal ' : ' vertical '; echo $sufix; ?>" style="
        <?php if($show_type=='horizontal'){ 
                 if ($format == '%') {   
       ?>        max-width: <?php echo $width;?>;
                 height: <?php echo $height;?>px;"
       <?php }else { ?>  
                max-width: <?php echo $numSlides * $width;?>px;
                height: <?php echo $height;?>px;"
       <?php } }else{ ?>
            <?php if ($format == '%') {?>
                max-width: <?php echo $width;?>;
                height:<?php echo $numSlides*$height;?>px;"
       <?php }?>
                max-width: <?php echo $width;?>px;
                height:<?php echo $numSlides*$height;?>px;"
       <?php }?>
    >
    <div class="swipe-wrap">
        <?php if($arrows): ?>
           <span class="arrow-left"></span>
           <span class="arrow-right"></span>
        <?php endif; ?>
        <?php if($show_type=='horizontal'){ ?>
                <div class="swiper-container" style="height: <?php echo $height;?>px;">
        <?php } else { ?>
               <div class="swiper-container" style="height: <?php echo $numSlides*$height;?>px;">
            <?php  } ?>
          <div class="swiper-wrapper">
          <?php
          $dir = "images/os_touchslider_$module->id";
            $images = json_decode(base64_decode($params->get('imagezer')));
            if(isset($images) && count($images) > 0):

                $i=0;
                $seting_relation = abs($width/$height);
                $temp_relation = 0;
                $good_relation = 0;
                $best_relation =100;             

                foreach ($images as $image):
                    $temp_original_img = "{$dir}/original/{$image->file}";
                    if (JFile::exists($temp_original_img)) {
                        $info = getimagesize($temp_original_img);
                        $temp_relation = abs($info[0]/$info[1]);                      
                        $good_relation = abs($seting_relation-$temp_relation);
                        if($good_relation<$best_relation){
                            $best_relation = $good_relation;
                            $num_img = $i;
                        }
                    }
                    $i++;
                endforeach;

                $i=0;
                foreach ($images as $image):
                    $target = '_self';
                    if(isset($image->name)) { if(substr($image->name, 0, 4) == 'http') $target = '_blank'; }
                    $ashka = (isset($image->name) && $image->name != "") ?  "<a target='$target' href='".$image->name."'>":"";
                    $aclose = (isset($image->name) && $image->name != "") ? "</a>": "";
                    $alt = ($image->alt) ? " alt='".$image->alt."' title='".$image->alt."' " :"";
                                   
                    if(($respect_quite != 1) && ($format != '%')) {
                        if($num_img == $i) {
                            createImage("{$dir}/original/{$image->file}", "{$dir}/slideshow/{$image->file}", $width, $height, true,100); ?>
                        <div class="swiper-slide">
                            <?php echo $ashka; ?>
                            <img id="imgheight" unselectable="on" <?php echo $alt; ?> src="<?php echo JURI::root() . $dir.'/slideshow/'.$image->file; ?>"/>
                            <?php echo $aclose; ?>
                        <div class="caption">
                          <?php echo base64_decode($image->caption); ?>
                        </div>
                      </div>
                  <?php } else { ?>

                      <div class="swiper-slide">
                          <?php echo $ashka; ?>
                          <img id="imgheight" unselectable="on" <?php echo $alt; ?> src="<?php echo JURI::root() . $dir.'/original/'.$image->file; ?>"/>
                          <?php echo $aclose; ?>
                        <div class="caption">
                          <?php echo base64_decode($image->caption); ?>
                        </div>
                      </div>
                  <?php }
                        $i++; 
                    } else {
                    
                        if ($format == '%') {?> 
                        <div class="swiper-slide">
                           <?php echo $ashka; ?>
                          <img id="imgheight" unselectable="on" <?php echo $alt; ?> src="<?php echo JURI::root() . $dir.'/original/'.$image->file; ?>"/>
                             <?php echo $aclose; ?>
                          <div class="caption">
                            <?php echo base64_decode($image->caption); ?>
                          </div>
                        </div> 
                        
                      <?php } else {
                         createImage("{$dir}/original/{$image->file}", "{$dir}/slideshow/{$image->file}", $width, $height, true,100); ?>
                        <div class="swiper-slide">
                           <?php echo $ashka; ?>
                          <img id="imgheight" unselectable="on" <?php echo $alt; ?> src="<?php echo JURI::root() . $dir.'/slideshow/'.$image->file; ?>"/>
                             <?php echo $aclose; ?>
                          <div class="caption">
                            <?php echo base64_decode($image->caption); ?>
                          </div>
                        </div> 
                      
              <?php } }
               endforeach; 
            endif; ?>
          </div>
        </div>
    </div>

    <center>
      <div class="pagination"></div>
    </center>
</div>

<script type="text/javascript">
    
 jQuery(window).load(function() {

    var mySwiper<?php echo $module->id;?> = new Swiper('#osslider<?php echo $module->id;?> .swiper-container',{
      <?php if($dots): ?>
      pagination: '#osslider<?php echo $module->id;?> .pagination',
      <?php endif; ?>
      loop: true,
      mode:'<?php echo $params->get('type','horizontal')?>',
      speed:<?php echo $params->get('time-interval','2000')?>,
      autoplay:<?php echo $autoplay ? $params->get('effect-speed') : '0'?>,
      autoResize: true,
      DOMAnimation: true,
      preventLinks: true,
      grabCursor: false,
      createPagination: <?php echo $dots?'true':'false'?>,
      paginationClickable: true,
      slidesPerView: <?php if($params->get('countSlides') != '1') {
                                    echo $params->get('countSlides');
                          } else {
                            echo '1';
                           } ?>
  });
   <?php if($arrows): ?>
      jQuery('#osslider<?php echo $module->id;?> .swipe-wrap .arrow-left').on('click', function() {
        mySwiper<?php echo $module->id;?>.swipePrev();
      });
      jQuery('#osslider<?php echo $module->id;?> .swipe-wrap .arrow-right').on('click', function() {
        mySwiper<?php echo $module->id;?>.swipeNext();
      });
  <?php endif; ?>
<?php if($params->get('countSlides') != '1' && ($show_type=='horizontal')) {?>
        jQuery('.swiper-slide img#imgheight').css("maxWidth","100%");
<?php }?>
<?php if($params->get('countSlides') != '1' && ($show_type=='vertical')) {?>
        jQuery('.swiper-slide img#imgheight').css("maxHeight","100%");
<?php }?>
     var kw=0;
    function ossSizeOnLoad() {
        jQuery("#osslider<?php echo $module->id;?> .swiper-slide img#imgheight").css('height', '100%');
        jQuery("#osslider<?php echo $module->id;?> .swiper-slide img#imgheight").css('width', '100%');  
        var captionHeight = null;
        jQuery('#osslider<?php echo $module->id;?> .swiper-slide img#imgheight').each(function(){
                if ('<?php echo $show_type;?>' =='horizontal'){
                    var h = <?php echo $height ;?>;
                    //var w = <?php echo $numSlides;?> * <?php echo $width ;?>;
                }else{
                    var h = <?php echo $numSlides;?> * <?php echo $height ;?>;
                   // var w = <?php echo $width ;?>;
                    }
                var wid = jQuery('#osslider<?php echo $module->id;?>  .swipe-wrap').width();
                    kw=h/wid;
                    captionHeight = kw*wid;
                jQuery("#osslider<?php echo $module->id;?> .swiper-container").height(captionHeight);
                jQuery("#osslider<?php echo $module->id;?> .touchSlider").height(captionHeight);
        });
    }
    ossSizeOnLoad();
    jQuery(window).resize(function resize () {
        jQuery("#osslider<?php echo $module->id;?> .swiper-slide img#imgheight").css('height', '100%');
        jQuery("#osslider<?php echo $module->id;?> .swiper-slide img#imgheight").css('width', '100%');
        var captionHeight = null;
        var hi = 0;
        jQuery('#osslider<?php echo $module->id;?> .swiper-slide img#imgheight').each(function(){
            var w = jQuery('.touchSlider').width();         
            captionHeight=kw*w;
            if ('<?php echo $show_type ?>' == 'horizontal') {
                jQuery("#osslider<?php echo $module->id;?> .swiper-container").height(captionHeight);
                jQuery("#osslider<?php echo $module->id;?> .touchSlider").height(captionHeight);
                jQuery("#osslider<?php echo $module->id;?> .swiper-slide").height(captionHeight);
            }  else{
                jQuery("#osslider<?php echo $module->id;?> .swiper-container").height(captionHeight);
                jQuery("#osslider<?php echo $module->id;?> .touchSlider").height(captionHeight);
                jQuery("#osslider<?php echo $module->id;?> .swiper-slide").height(captionHeight);
                (mySwiper<?php echo $module->id;?>).reInit();
            }
        });
    });
 });
</script>