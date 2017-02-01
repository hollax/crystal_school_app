<!DOCTYPE html>
<html>
    <head>
        <title>Add Term of School</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    </head>
    <body>

    	<ul class="nav nav-tabs">
	        <li class="active"><a data-toggle="tab" href="#home">Veiw All</a></li>
	        <li><a  data-toggle="tab" href="#add_term">Add Term</a>
	        </li>

    	</ul>

	    <div id="add_term" class="tab-pane fade">
	        <div class="col-xs-12 col-sm-9">
			<form class="form-horizontal" role="form" method="POST">
			    <div class="form-group">
			        <label for="session_id" class="col-sm-2 control-label">
			         Session ID:   
			        </label>
			        <div class="col-sm-10">
			            <input type="text" class="form-control" name="session_id" placeholder="Enter Session ID">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="term_name" class="col-sm-2 control-label">
			         Term Name:   
			        </label>
			        <div class="col-sm-10">
			            <input type="text" class="form-control" 
			            name="term_name" placeholder="Enter Term Name">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="def" class="col-sm-2 control-label">
			         Def:   
			        </label>
			        <div class="col-sm-10">
			            <input type="number" class="form-control" 
			            name="def" placeholder="Enter Def">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="create_id" class="col-sm-2 control-label">
			         Create ID:   
			        </label>
			        <div class="col-sm-10">
			            <input type="number" class="form-control" name="create_id" placeholder="Create ID">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="term_start" class="col-sm-2 control-label">
			         Term Start:   
			        </label>
			        <div class="col-sm-10 date">
			        	<div class="input-group input-append">
				            <input type="date" class="form-control" id = date name="date">
				            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
				        </div>
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="term_end" class="col-sm-2 control-label">
			         Term End:   
			        </label>
			        <div class="col-sm-10 date">
			        	<div class="input-group input-append">
				            <input type="date" class="form-control" id = date name="date">
				            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
				        </div>
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="user_id" class="col-sm-2 control-label">
			         User ID:   
			        </label>
			        <div class="col-sm-10">
			            <input type="number" class="form-control" name="user_id" placeholder="User ID">
			        </div>
			    </div>
			    
			    <div class="form-group">
			        <label for="term_order" class="col-sm-2 control-label">
			         Term Order:   
			        </label>
			        <div class="col-sm-10">
			            <input type="number" class="form-control" name="term_order" placeholder="Term Order">
			        </div>
			    </div>

			    <div class="form-group">
			        <div class="col-sm-offset-2 col-sm-10">
			            <button type="submit" class="btn btn-primary">
			            Submit</button>
			        </div>
	        	</div>


			</form>
			</div>
		</div>

    </body>
</html>






