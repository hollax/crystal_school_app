<!-- /#wrap -->
<footer class="Footer bg-dark dker">
    <p>2016 &copy; Metis Bootstrap Admin Template</p>
</footer>
<!-- /#footer -->
<!-- #helpModal -->
<div id="helpModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- Modal -->
<div id="formModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <iframe id="modal-frame" width="100%" height="100%"  src=""></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /#helpModal -->

<!--Bootstrap -->
<script src="{base_url("assets/dashboard/lib/bootstrap/js/bootstrap.js")}"></script>

<script>
    $('.data-table').dataTable();


    {* The button that launches modal       *}
    $('.btn-form-modal').click(function(e){
        e.preventDefault();
        // get the url to open
        var url = $(this).data('url');
        if(url){
            console.log("Launching modal and changing the iframe url to "+url);
            $('#modal-frame').attr('src' , url);
            $("#formModal").modal();
        }
    });
</script>
<!-- MetisMenu -->
<script src="{base_url("assets/dashboard/lib/metismenu/metisMenu.js")}"></script>
<!-- Screenfull -->
<script src="{base_url("assets/dashboard/lib/screenfull/screenfull.js")}"></script>


<!-- Metis core scripts -->
<script src="{base_url("assets/dashboard/js/core.js")}"></script>
<!-- Metis demo scripts -->
<script src="{base_url("assets/dashboard/js/app.js")}"></script>


<script src="{base_url("assets/dashboard/js/style-switcher.js")}"></script>
