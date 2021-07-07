@include('widgets.header')
        
<div class="uk-container uk-padding">
	
	<div class="uk-card uk-card-default uk-card-body">
		@if(isset($success))
			<div class="uk-alert-success" uk-alert>
		    <a class="uk-alert-close" uk-close></a>
		    <p><strong>Success: </strong>{{$success}}</p>
		</div>
		@endif

		@if(isset($error))
			<div class="uk-alert-danger" uk-alert>
		    <a class="uk-alert-close" uk-close></a>
		    <p><strong>Error: </strong>{{$error}}</p>
		</div>
		@endif

		@if($errors->has('name') || $errors->has('color'))
		<div class="uk-alert-danger" uk-alert>
		    <a class="uk-alert-close" uk-close></a>
		    <p><strong>Error: </strong>Please fill up all of the required fields.</p>
		</div>

		@endif
		
	<form class="uk-form-horizontal uk-margin-large" method="post" action="/widgets">
	    <div class="uk-margin">
	        <label class="uk-form-label" for="form-horizontal-text">Name</label>
	        <div class="uk-form-controls">
	        	
	            
	            @if($errors->has('name'))
	            	<input class="uk-input input-error" id="form-horizontal-text" name="name" type="text" value="" placeholder="Name...">
				    <div class="error">{{ $errors->first('name') }}*</div>
				@else
					<input class="uk-input" id="form-horizontal-text" name="name" type="text" placeholder="Name...">
				@endif
	        </div>
	    </div>

	    <div class="uk-margin">
	        <label class="uk-form-label" for="form-horizontal-select">Color</label>
	        <div class="uk-form-controls">
	            
	             @if($errors->has('color'))
	             	<select class="uk-select input-error" name="color" id="form-horizontal-select">
	            	<option value="">Please select a color</option>
	                <option value="white">White</option>
	                <option value="Cyan">Cyan</option>
	                <option value="Grey">Grey</option>
	                <option value="Red">Red</option>
	                <option value="Yellow">Yellow</option>
	                <option value="Black">Black</option>
	            </select>
				    <div class="error">{{ $errors->first('color') }}*</div>

				    @else
				    <select class="uk-select" name="color" id="form-horizontal-select">
	            	<option value="">Please select a color</option>
	                <option value="white">White</option>
	                <option value="Cyan">Cyan</option>
	                <option value="Grey">Grey</option>
	                <option value="Red">Red</option>
	                <option value="Yellow">Yellow</option>
	                <option value="Black">Black</option>
	            </select>

				@endif
	        </div>
	       
	    </div>

	    <div class="uk-margin">
	        <div class="uk-form-label">Description</div>
	        <div class="uk-form-controls uk-form-controls-text">
	            <textarea class="uk-textarea" name="description" rows="5" placeholder="Description..."></textarea>
	        </div>
	    </div>

	    <button class="uk-float-right uk-button uk-button-primary" type="submit">Submit</button>

	</form>
	</div>
</div>

@include('widgets.footer')