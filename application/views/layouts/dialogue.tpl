    {$CI->smartytpl->show('layouts/partials/header')}

  </head>
  <body >
        <div class="container-fluid" style="padding-top: 20px">
                <div class="row">
                    <div class="col-lg-12">
                        {include file='layouts/partials/alerts.tpl'}
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <h1>{{$page_title}}</h1>
                                  {{$action_view}}
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                    {*Load footer *}
                    {$CI->smartytpl->show('layouts/partials/footer')}
                </div>
            </div>
        </body>
</html>
