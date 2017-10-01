<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/data/gantry5/themes/rt_interstellar/config/features_-_typography/layout.yaml',
    'modified' => 1498110496,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1457353897
        ],
        'layout' => [
            '/top/' => [
                0 => [
                    0 => 'system-messages-9828'
                ]
            ],
            '/navigation/' => [
                0 => [
                    0 => 'logo-5992 17',
                    1 => 'social-7220 13',
                    2 => 'menu-4196 70'
                ]
            ],
            '/header/' => [
                
            ],
            '/slideshow/' => [
                0 => [
                    0 => 'simplecontent-7561'
                ]
            ],
            '/above/' => [
                
            ],
            '/showcase/' => [
                
            ],
            '/utility/' => [
                
            ],
            '/feature/' => [
                
            ],
            '/container-4448/' => [
                0 => [
                    0 => [
                        'sidebar 20' => [
                            
                        ]
                    ],
                    1 => [
                        'mainbar 60' => [
                            0 => [
                                0 => 'custom-1275'
                            ]
                        ]
                    ],
                    2 => [
                        'aside 20' => [
                            
                        ]
                    ]
                ]
            ],
            '/expanded/' => [
                
            ],
            '/extension/' => [
                
            ],
            '/bottom/' => [
                
            ],
            '/footer/' => [
                0 => [
                    0 => 'position-position-9362 60',
                    1 => 'position-position-6125 40'
                ]
            ],
            '/copyright/' => [
                0 => [
                    0 => 'copyright-5748'
                ]
            ],
            'offcanvas' => [
                0 => [
                    0 => 'mobile-menu-7951'
                ]
            ]
        ],
        'structure' => [
            'top' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0'
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => ''
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '0',
                    'class' => ''
                ]
            ],
            'slideshow' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => ''
                ]
            ],
            'showcase' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => ''
                ]
            ],
            'feature' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => ''
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'block' => [
                    'class' => 'equal-height'
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'block' => [
                    'class' => 'equal-height'
                ]
            ],
            'aside' => [
                'block' => [
                    'class' => 'equal-height'
                ]
            ],
            'container-4448' => [
                'attributes' => [
                    'boxed' => '0',
                    'class' => '',
                    'extra' => [
                        
                    ]
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => ''
                ]
            ],
            'extension' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => ''
                ]
            ],
            'bottom' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => ''
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => '0',
                    'class' => ''
                ]
            ],
            'copyright' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => 'g-mobile-center-compact'
                ]
            ]
        ],
        'content' => [
            'logo-5992' => NULL,
            'social-7220' => [
                'attributes' => [
                    'css' => [
                        'class' => ''
                    ]
                ],
                'block' => [
                    'class' => 'hidden-phone',
                    'variations' => 'align-left'
                ]
            ],
            'menu-4196' => [
                'block' => [
                    'variations' => 'align-right'
                ]
            ],
            'simplecontent-7561' => [
                'title' => 'Header - Typography',
                'attributes' => [
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'Typography',
                            'author' => '',
                            'leading_content' => 'Interstellar has an integrated set of typographical elements, for general content as well as platform specific items, to provide a consistent site experience.',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'Typography'
                        ]
                    ]
                ]
            ],
            'custom-1275' => [
                'title' => 'Typography Examples',
                'attributes' => [
                    'html' => '<h1 class="nomargintop nopaddingtop">H1 Heading</h1>

<p>View general elements of the style typography in the template, although please do visit the various pages in the demo to discover a fuller set of what is available with Interstellar.</p>

<p>
<a href="#" class="button">button</a>
<a href="#" class="button button-4">button button-4</a>
</p>

<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. Vestibulum at sem ut <a href="#">ipsum vestibulum</a> euismod. Mauris et <small>massa porta leo</small> facilisis feugiat. <em>Suspendisse id neque a sem facilisis blandit.</em> Aliquam sem leo, commodo ut, rutrum auctor, iaculis nec, eros.</p>
<p>
<a href="#" class="button button-2">button button-2</a>
<a href="#" class="button button-3">button button-3</a>
</p>

<h2>H2 Heading</h2>
<div class="g-content float-right nomargintop nopaddingtop"><div class="moduletable">
<ul class="unstyled">
  <li><a href="#">&lt;ul class=&quot;unstyled&quot;&gt;</a></li>
  <li><a href="#">Phasellus elementum, quam a euismod imperdiet</a></li>
  <li><a href="#">Pellentesque pulvinar dui a magna</a></li>
</ul>
</div></div>
<p>Nullam eget neque. Nullam <a href="#">imperdiet venenatis</a> ligula. Integer a leo. Nunc consectetur. Maecenas sem. Proin vulputate, massa vel volutpat laoreet, purus erat pretium ligula, <strong>eget varius arcu</strong> nibh sed libero. Fusce ante. Nullam interdum aliquet metus. Ut ultrices vestibulum tellus. Praesent quis erat. </p>

<h3>H3 Heading</h3>
<p>In erat. Pellentesque erat. <strong>Mauris vehicula vestibulum justo.</strong> Cum sociis natoque penatibus et magnis dis parturient montes, <a href="#">nascetur ridiculus</a> mus. Nulla pulvinar est. Integer urna. Pellentesque pulvinar dui a magna. Nulla facilisi.</p>
<p class="alert alert-error">&lt;p class=&quot;alert alert-error&quot;&gt;&lt;/p&gt;</p>
<p>
<a href="#" class="button button-red">button button-red</a>
<a href="#" class="button button-3 button-red">button button-3 button-red</a>
</p>
 <p>Praesent id dolor non erat viverra volutpat. Fusce tellus libero, <a href="#">luctus adipiscing</a>, tincidunt vel, egestas vitae, eros. Vestibulum mollis, est id rhoncus volutpat, dolor velit <strong>tincidunt neque</strong>, vitae pellentesque ante sem eu nisl.</p>
 <blockquote> Donec facilisis, magna eget elementum pellentesque, augue arcu aliquet eros, eget convallis mauris ante quis magna.</blockquote>
 <p>
<a href="#" class="button button-grey">button button-grey</a>
<a href="#" class="button button-grey button-large">button button-grey button-large</a>
 </p>
<p>Pellentesque habitant morbi <a href="#">tristique senectus</a> et netus et malesuada fames ac turpis egestas. Aenean et libero. <strong>Nam aliquam</strong>. Quisque vitae tortor id neque dignissim laoreet.</p>


<h4>H4 Heading</h4>
<p>Mauris lobortis. Aliquam lacinia purus. <strong>Pellentesque magna</strong>. Mauris euismod metus nec tortor. Phasellus elementum, quam a <code>&lt;code&gt;&lt;/code&gt;</code></code> imperdiet, ligula felis faucibus enim, eu malesuada nunc felis sed turpis. <a href="#">Morbi convallis luctus tortor</a>. Integer bibendum lacinia velit. Suspendisse mi lorem, porttitor ut, interdum et, lobortis a, lectus.</p>
<p class="alert alert-success">&lt;p class=&quot;alert alert-success&quot;&gt;&lt;/p&gt;</p>
<p>
<a href="#" class="button button-block">button button-block</a>
</p>
<p>Duis eu ante. <a href="#">Integer at sapien</a>. Praesent sed nisl tempor est pulvinar tristique. Maecenas non <strong>lorem quis mi</strong> laoreet adipiscing.</p>
<blockquote>
<p>&lt;blockquote&gt; &lt;p&gt;&lt;cite title=&quot;&quot;&gt;&lt;/cite&gt;&lt;/small&gt; &lt;/blockquote&gt;</p>
<small>Someone famous <cite title="Source Title">Source Title</cite></small>
</blockquote>

<h5>H5 Heading</h5>
<p>Vestibulum mollis, est <strong>id rhoncus</strong> volutpat, dolor velit tincidunt <a href="#">neque</a>, vitae pellentesque ante sem eu nisl. <em>Donec facilisis</em>, magna eget elementum pellentesque.</p>
<p class="alert alert-info">&lt;p class=&quot;alert alert-info&quot;&gt;&lt;/p&gt;</p>
<p>
<a href="#" class="button button-blue">button button-blue</a>
<a href="#" class="button button-blue button-xlarge">button button-blue button-xlarge</a>
</p>
<p>Donec facilisis, magna eget <strong>elementum pellentesque</strong>, augue arcu aliquet eros, eget convallis mauris ante <a href="#">quis magna</a>.</p>
<pre>
&lt;p&gt;Sample text here…&lt;/p&gt;
</pre>
<p>
<a href="#" class="button button-grey button-small">button button-grey button-small</a>
<a href="#" class="button button-grey button-xsmall">button button-grey button-xsmall</a>
 </p>

<h6>H6 Heading</h6>
<p>Nam id turpis sit <strong>amet neque</strong> cursus luctus. Cum sociis natoque penatibus <a href="#">et magnis dis</a> parturient montes, nascetur ridiculus mus. Quisque id tortor. In vitae sapien. Nunc quis tellus.</p>
<p class="alert alert-warning">&lt;p class=&quot;alert alert-warning&quot;&gt;&lt;/p&gt;</p>
<p>
<a href="#" class="button button-orange"><i class="fa fa-fw fa-download"></i>button button-orange - <em>FontAwesome</em></a>
<a href="#" class="button button-orange button-medium">button button-orange button-medium</a>
</p>'
                ]
            ],
            'position-position-9362' => [
                'title' => 'Footer A',
                'attributes' => [
                    'key' => 'footer-a'
                ]
            ],
            'position-position-6125' => [
                'title' => 'Footer B',
                'attributes' => [
                    'key' => 'footer-b'
                ]
            ],
            'copyright-5748' => [
                'block' => [
                    'class' => 'g-copyright'
                ]
            ],
            'mobile-menu-7951' => [
                'title' => 'Mobile Menu'
            ]
        ]
    ]
];
