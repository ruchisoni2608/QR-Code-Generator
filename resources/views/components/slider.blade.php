@if(!empty($data['slider']))
    <div class="main-slider style-two default-banner" id="home">
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <div id="rev_slider_1175_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="duotone192" data-source="gallery" style="background-color:transparent;padding:0px;">
                    <!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
                    <div id="rev_slider_1175_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
                        <ul>
                            @foreach($data['slider']['items'] as $item)
                                <!-- SLIDE  -->
                                <li data-index="rs-100" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ !empty($item->url) ? asset('storage/slider/'.$item->url) : '' }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    @if($item->type == \App\Models\Media::EXTERNAL)
                                        <iframe src="{{ $item->url }}" width="100%" height="100%" > </iframe>
                                    @else
                                        <img src="{{ !empty($item->url) ? asset('storage/slider/'.$item->url) : '' }}"  alt=""  data-lazyload="{{ !empty($item->url) ? asset('storage/slider/'.$item->url) : '' }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>
                                    @endif
                                    <!-- LAYERS -->
                                    <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['0','0','0','0']"
                                         data-width="full" data-height="full"
                                         data-whitespace="nowrap"
                                         data-type="shape"
                                         data-basealign="slide"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 2;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption   rs-parallaxlevel-4"
                                         id="slide-100-layer-2"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-100']"
                                         data-fontsize="['45','45','35','24']"
                                         data-lineheight="['65','65','65','36']"
                                         data-width="['720','640','480','300']"
                                         data-height="none"
                                         data-whitespace="normal"

                                         data-type="text"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 5; min-width: 720px; max-width: 720px; white-space: normal; font-size: 60px; line-height: 70px;  color: rgba(255, 255, 255, 1.00);font-family:'lora',sans-serif;border-width:0px;letter-spacing:0px; font-weight:700;">{{$item->caption}}</div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption"
                                         id="slide-100-layer-4"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['133','159','141','102']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="button"
                                         data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":900,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(238, 238, 238, 0.0);bs:0;"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 7; background-color:rgba(0,0,0,0) !important;">
                                        <a class="site-button m-r10" href="{{$item->action_url}}">READ MORE </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tp-bannertimer" style="height: 8px; background-color: rgba(255, 255, 255, 0.25);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
