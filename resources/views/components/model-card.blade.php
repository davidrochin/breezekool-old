<div class="wpb_column vc_column_container vc_col-sm-4">
    <div class="vc_column-inner ">
        <div class="wpb_wrapper">
            <div class='q_elements_holder one_column responsive_mode_from_768'>
                <div class='q_elements_item ' data-animation='no'
                    style='background-color:#ffffff;'>
                    <div class='q_elements_item_inner'>

                        <div class='q_elements_item_content q_elements_holder_custom_938435' style='padding:50px 22px 13px 35px'>

                            <div class="wpb_single_image wpb_content_element vc_align_left  element_from_fade">
                                <div class="wpb_wrapper">

                                    <div
                                        class="vc_single_image-wrapper   vc_box_border_grey">
                                        <img width="150" height="150"
                                            src="{{ $image_url }}"
                                            class="vc_single_image-img attachment-thumbnail"
                                            alt="Evaporativo A4C19"
                                            sizes="(max-width: 150px) 100vw, 150px">
                                    </div>
                                </div>
                            </div>

                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                <h4>{{ $model_name }}</h4>

                                </div>
                            </div>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    {{ $slot }}

                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 30px">
                                <span class="vc_empty_space_inner">
                                    <span class="empty_space_image"></span>
                                </span></div>

                                <div class="d-flex flex-column">
                                    <a itemprop="url" href="{{ $url }}" target="_self" class="qbutton  default mb-2 text-center" style="">Manual</a>
                                    <a itemprop="url" href="{{ isset($url_data_sheet) ? $url_data_sheet : '#' }}" target="_self" class="qbutton  default text-center mb-2" style="">Ficha Técnica</a>
                                    <a itemprop="url" href="{{ asset('catalogo.pdf') }}" target="_self" class="qbutton  default text-center" style="">Catálogo</a>
                                </div>

                            <div class="vc_empty_space" style="height: 30px">
                                <span class="vc_empty_space_inner">
                                    <span class="empty_space_image"></span>
                                </span></div>

                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="vc_empty_space" style="height: 30px"><span
                    class="vc_empty_space_inner">
                    <span class="empty_space_image"></span>
                </span></div>

        </div>
    </div>
</div>