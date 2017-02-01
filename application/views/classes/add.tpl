<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#add">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
        <h3>HOME</h3>
        {foreach $classes as $class}
            {$class->name}
        {/foreach}
    </div>
    <div id="add" class="tab-pane fade">
        <form method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
               
            </div>
           
            <input type="submit" name="submit" class="btn btn-default"  value="Submit"   />
        </form>
    </div>

</div>