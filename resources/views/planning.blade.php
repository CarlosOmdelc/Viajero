@extends('layouts.layout')

@section('content')
<div class="container">
  <form class="form-inline my-2 my-lg-0">
    <div class="row" style="float:center">
      <div class="col-md-10">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
      </div>
      <div class="col-md-2">
        <button class="btn btn-default" type="submit">Search</button>
      </div>
    </div>
  </form>
</div>

<div class="container">
	<!--
  <div class="row">
  	<div class="col-md-12">
      <div style="display:inline-block; width:100%;">
    		<ul class="timeline timeline-horizontal">
    			<li class="timeline-item">
    				<div class="timeline-badge primary"><i class="glyphicon glyphicon-plane"></i></div>
    				<div class="timeline-panel">
    					<div class="timeline-heading">
    						<h4 class="timeline-title">London, England</h4>
    						<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
    					</div>
    					<div class="timeline-body">
    						<p>Mussum ipsum cacilds, vidis litro abertis. Consetis faiz elementum girarzis, nisi eros gostis.</p>
    					</div>
    				</div>
    			</li>
    			<li class="timeline-item">
    				<div class="timeline-badge success"><i class="glyphicon glyphicon-plane"></i></div>
    				<div class="timeline-panel">
    					<div class="timeline-heading">
    						<h4 class="timeline-title">Edinburgh, Scotland</h4>
    						<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
    					</div>
    					<div class="timeline-body">
    						<p>Mussum ipsum cacilds, vidis faiz elementum girarzis, nisi eros gostis.</p>
    					</div>
    				</div>
    			</li>
    			<li class="timeline-item">
    				<div class="timeline-badge info"><i class="glyphicon glyphicon-plane"></i></div>
    				<div class="timeline-panel">
    					<div class="timeline-heading">
    						<h4 class="timeline-title">Dublin, Ireland</h4>
    						<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
    					</div>
    					<div class="timeline-body">
    						<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipisci. Mé faiz elementum girarzis, nisi eros gostis.</p>
    					</div>
    				</div>
    			</li>
    			<li class="timeline-item">
    				<div class="timeline-badge danger"><i class="glyphicon glyphicon-plane"></i></div>
    				<div class="timeline-panel">
    					<div class="timeline-heading">
    						<h4 class="timeline-title">Cardiff, Wales</h4>
    						<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
    					</div>
    					<div class="timeline-body">
    						<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
    					</div>
    				</div>
    			</li>
    		</ul>
  	  </div>
  	</div>
  </div>
  -->

  <div class="row">
  	<div class="col-md-12">
  		<ul class="timeline">
  			<li class="timeline-item">
  				<div class="timeline-badge"><i class="glyphicon glyphicon-plane"></i></div>
  				<div class="timeline-panel">
  					<div class="timeline-heading">
  						<h4 class="timeline-title">London, England</h4>
  						<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
  					</div>
  					<div class="timeline-body">
  						<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
  					</div>
  				</div>
  			</li>
  			<li class="timeline-item">
  				<div class="timeline-badge"><i class="glyphicon glyphicon-plane"></i></div>
  				<div class="timeline-panel">
  					<div class="timeline-heading">
  						<h4 class="timeline-title">Edinburgh, Scotland</h4>
  						<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
  					</div>
  					<div class="timeline-body">
  						<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros gostis.</p>
  					</div>
  				</div>
  			</li>
  			<li class="timeline-item">
  				<div class="timeline-badge"><i class="glyphicon glyphicon-plane"></i></div>
  				<div class="timeline-panel">
  					<div class="timeline-heading">
  						<h4 class="timeline-title">Dublin, Ireland</h4>
  						<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
  					</div>
  					<div class="timeline-body">
  						<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
  					</div>
  				</div>
  			</li>
  			<li class="timeline-item">
  				<div class="timeline-badge"><i class="glyphicon glyphicon-plane"></i></div>
  				<div class="timeline-panel">
  					<div class="timeline-heading">
  						<h4 class="timeline-title">Cardiff, Wales</h4>
  						<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
  					</div>
  					<div class="timeline-body">
  						<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
  					</div>
  				</div>
  			</li>
  		</ul>
  	</div>
  </div>
</div>
@endsection
