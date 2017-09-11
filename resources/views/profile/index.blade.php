@extends('layouts.app')

@section('content')
    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-7-10">
            <div class="md-card">
                <div class="user_heading">
                    <div class="user_heading_menu hidden-print">
                        <div class="uk-display-inline-block" data-uk-dropdown="{pos:'left-top'}">
                            <i class="md-icon material-icons md-icon-light">&#xE5D4;</i>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav">
                                    <li><a href="#">Action 1</a></li>
                                    <li><a href="#">Action 2</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="uk-display-inline-block"><i class="md-icon md-icon-light material-icons" id="page_print">&#xE8ad;</i></div>
                    </div>
                    <div class="user_heading_avatar">
                        <div class="thumbnail">
                            <img src="assets/img/avatars/avatar_11.png" alt="user avatar"/>
                        </div>
                    </div>
                    <div class="user_heading_content">
                        <h2 class="heading_b uk-margin-bottom"><span class="uk-text-truncate">Alessandra Tremblay</span><span class="sub-heading">Land acquisition specialist</span></h2>
                        <ul class="user_stats">
                            <li>
                                <h4 class="heading_a">2391 <span class="sub-heading">Posts</span></h4>
                            </li>
                            <li>
                                <h4 class="heading_a">120 <span class="sub-heading">Photos</span></h4>
                            </li>
                            <li>
                                <h4 class="heading_a">284 <span class="sub-heading">Following</span></h4>
                            </li>
                        </ul>
                    </div>
                    <a class="md-fab md-fab-small md-fab-accent hidden-print" href="page_user_edit.html">
                        <i class="material-icons">&#xE150;</i>
                    </a>
                </div>
                <div class="user_content">
                    <ul id="user_profile_tabs" class="uk-tab" data-uk-tab="{connect:'#user_profile_tabs_content', animation:'slide-horizontal'}" data-uk-sticky="{ top: 48, media: 960 }">
                        <li class="uk-active"><a href="#">About</a></li>
                        <li><a href="#">Photos</a></li>
                        <li><a href="#">Posts</a></li>
                    </ul>
                    <ul id="user_profile_tabs_content" class="uk-switcher uk-margin">
                        <li>
                            In quis fuga ratione ratione suscipit minus magni itaque molestias quasi sequi quia nobis aut molestiae praesentium amet voluptas voluptatem est molestias quisquam nemo quia suscipit cupiditate optio sed quo sit explicabo nisi voluptas quisquam sed illo impedit ut inventore at velit totam mollitia ut placeat suscipit sit dolore ex delectus rerum nesciunt sit fuga hic deleniti et alias dolores occaecati dicta eum sit ut corrupti hic sint iusto reiciendis quo tempore asperiores aut sunt nostrum est et nam commodi accusantium culpa odio sequi quia iusto eum explicabo voluptatem atque fugiat nam possimus alias est ipsa aut et assumenda et deserunt aut distinctio iusto voluptatem qui velit enim consequatur modi suscipit libero magnam esse recusandae vel eaque est sit et occaecati expedita voluptatem aut.                                    <div class="uk-grid uk-margin-medium-top uk-margin-large-bottom" data-uk-grid-margin>
                                <div class="uk-width-large-1-2">
                                    <h4 class="heading_c uk-margin-small-bottom">Contact Info</h4>
                                    <ul class="md-list md-list-addon">
                                        <li>
                                            <div class="md-list-addon-element">
                                                <i class="md-list-addon-icon material-icons">&#xE158;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading">colton11@gmail.com</span>
                                                <span class="uk-text-small uk-text-muted">Email</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="md-list-addon-element">
                                                <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading">+33(0)5224986812</span>
                                                <span class="uk-text-small uk-text-muted">Phone</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="md-list-addon-element">
                                                <i class="md-list-addon-icon uk-icon-facebook-official"></i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading">facebook.com/envato</span>
                                                <span class="uk-text-small uk-text-muted">Facebook</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="md-list-addon-element">
                                                <i class="md-list-addon-icon uk-icon-twitter"></i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading">twitter.com/envato</span>
                                                <span class="uk-text-small uk-text-muted">Twitter</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="uk-width-large-1-2">
                                    <h4 class="heading_c uk-margin-small-bottom">My groups</h4>
                                    <ul class="md-list">
                                        <li>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Cloud Computing</a></span>
                                                <span class="uk-text-small uk-text-muted">14 Members</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Account Manager Group</a></span>
                                                <span class="uk-text-small uk-text-muted">167 Members</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Digital Marketing</a></span>
                                                <span class="uk-text-small uk-text-muted">235 Members</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">HR Professionals Association - Human Resources</a></span>
                                                <span class="uk-text-small uk-text-muted">61 Members</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h4 class="heading_c uk-margin-bottom">Timeline</h4>
                            <div class="timeline">
                                <div class="timeline_item">
                                    <div class="timeline_icon timeline_icon_success"><i class="material-icons">&#xE85D;</i></div>
                                    <div class="timeline_date">
                                        09 <span>May</span>
                                    </div>
                                    <div class="timeline_content">Created ticket <a href="#"><strong>#3289</strong></a></div>
                                </div>
                                <div class="timeline_item">
                                    <div class="timeline_icon timeline_icon_danger"><i class="material-icons">&#xE5CD;</i></div>
                                    <div class="timeline_date">
                                        15 <span>May</span>
                                    </div>
                                    <div class="timeline_content">Deleted post <a href="#"><strong>Minima praesentium similique inventore voluptatum qui.</strong></a></div>
                                </div>
                                <div class="timeline_item">
                                    <div class="timeline_icon"><i class="material-icons">&#xE410;</i></div>
                                    <div class="timeline_date">
                                        19 <span>May</span>
                                    </div>
                                    <div class="timeline_content">
                                        Added photo
                                        <div class="timeline_content_addon">
                                            <img src="assets/img/gallery/Image16.jpg" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline_item">
                                    <div class="timeline_icon timeline_icon_primary"><i class="material-icons">&#xE0B9;</i></div>
                                    <div class="timeline_date">
                                        21 <span>May</span>
                                    </div>
                                    <div class="timeline_content">
                                        New comment on post <a href="#"><strong>A labore fugit culpa.</strong></a>
                                        <div class="timeline_content_addon">
                                            <blockquote>
                                                Non distinctio omnis cum deleniti commodi numquam aliquid aliquam delectus facilis et quae eos nesciunt architecto et harum asperiores sed earum qui numquam eos.&hellip;
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline_item">
                                    <div class="timeline_icon timeline_icon_warning"><i class="material-icons">&#xE7FE;</i></div>
                                    <div class="timeline_date">
                                        29 <span>May</span>
                                    </div>
                                    <div class="timeline_content">
                                        Added to Friends
                                        <div class="timeline_content_addon">
                                            <ul class="md-list md-list-addon">
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Genoveva Schowalter</span>
                                                        <span class="uk-text-small uk-text-muted">Et voluptatem et itaque delectus omnis.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="user_profile_gallery" data-uk-check-display class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4" data-uk-grid="{gutter: 4}">
                                <div>
                                    <a href="assets/img/gallery/Image01.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image01.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image02.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image02.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image03.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image03.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image04.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image04.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image05.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image05.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image06.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image06.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image07.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image07.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image08.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image08.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image09.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image09.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image10.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image10.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image11.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image11.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image12.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image12.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image13.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image13.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image14.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image14.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image15.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image15.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image16.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image16.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image17.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image17.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image18.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image18.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image19.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image19.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image20.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image20.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image21.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image21.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image22.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image22.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image23.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image23.jpg" alt=""/>
                                    </a>
                                </div>
                                <div>
                                    <a href="assets/img/gallery/Image24.jpg" data-uk-lightbox="{group:'user-photos'}">
                                        <img src="assets/img/gallery/Image24.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <ul class="uk-pagination uk-margin-large-top">
                                <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                                <li class="uk-active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><span>&hellip;</span></li>
                                <li><a href="#">20</a></li>
                                <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Iure odit quis dolorem ut qui.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">22 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">6</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">103</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Saepe suscipit porro consequatur et reiciendis veniam.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">29 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">17</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">621</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Quasi repellendus est voluptas dolorem commodi.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">28 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">19</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">237</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Voluptas est eos totam dolore nostrum at.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">24 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">5</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">580</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Eum asperiores expedita et harum libero voluptas ut.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">19 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">7</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">345</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Provident sit incidunt est aut quis.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">11 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">27</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">278</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Ut cupiditate id consequuntur voluptas.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">16 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">12</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">537</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Iste delectus esse magnam quia necessitatibus.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">04 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">2</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">855</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Autem sed itaque omnis voluptatibus omnis aut.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">09 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">8</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">963</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Omnis explicabo id sapiente ut.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">09 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">23</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">761</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Provident delectus atque sequi deserunt qui quia vero.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">14 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">16</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">930</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">In molestiae sed voluptatibus sed.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">14 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">15</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">572</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Culpa adipisci ducimus explicabo.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">02 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">13</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">258</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Minima accusamus adipisci tenetur quibusdam dolorem expedita laborum.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">07 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">7</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">416</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Esse magnam non dolores quia nemo.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">22 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">24</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">633</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Sequi enim officiis sed consequatur rem repellendus.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">29 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">6</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">570</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Tempora consequuntur dolorum voluptatem beatae voluptatibus asperiores.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">07 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">20</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">931</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Magnam laudantium et aut quo voluptatem.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">20 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">23</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">993</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Molestiae eius saepe totam voluptatem excepturi et.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">16 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">2</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">322</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><a href="#">Doloremque ipsum maxime autem harum et totam.</a></span>
                                        <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small">15 May 2017</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small">10</span>
                                                </span>
                                            <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small">139</span>
                                                </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="uk-width-large-3-10 hidden-print">
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-margin-medium-bottom">
                        <h3 class="heading_c uk-margin-bottom">Alerts</h3>
                        <ul class="md-list md-list-addon">
                            <li>
                                <div class="md-list-addon-element">
                                    <i class="md-list-addon-icon material-icons uk-text-warning">&#xE8B2;</i>
                                </div>
                                <div class="md-list-content">
                                    <span class="md-list-heading">Quibusdam beatae.</span>
                                    <span class="uk-text-small uk-text-muted uk-text-truncate">Odit est pariatur consectetur ut omnis nemo.</span>
                                </div>
                            </li>
                            <li>
                                <div class="md-list-addon-element">
                                    <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                </div>
                                <div class="md-list-content">
                                    <span class="md-list-heading">Qui harum non.</span>
                                    <span class="uk-text-small uk-text-muted uk-text-truncate">Nostrum repellendus facilis corrupti omnis sit itaque.</span>
                                </div>
                            </li>
                            <li>
                                <div class="md-list-addon-element">
                                    <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                </div>
                                <div class="md-list-content">
                                    <span class="md-list-heading">Rerum rerum.</span>
                                    <span class="uk-text-small uk-text-muted uk-text-truncate">Ipsum aut nihil quam officiis.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h3 class="heading_c uk-margin-bottom">Friends</h3>
                    <ul class="md-list md-list-addon uk-margin-bottom">
                        <li>
                            <div class="md-list-addon-element">
                                <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Stephen Batz</span>
                                <span class="uk-text-small uk-text-muted">Placeat cupiditate quos ipsa.</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Karine Walker DVM</span>
                                <span class="uk-text-small uk-text-muted">Et excepturi expedita quo illum.</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_06_tn.png" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Caden Murray</span>
                                <span class="uk-text-small uk-text-muted">Et est maxime ipsa non ducimus.</span>
                            </div>
                        </li>
                    </ul>
                    <a class="md-btn md-btn-flat md-btn-flat-primary" href="#">Show all</a>
                </div>
            </div>
        </div>
    </div>
@endsection
