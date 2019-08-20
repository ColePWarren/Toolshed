{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('userId', 'UserId:') !!}
			{!! Form::text('userId') !!}
		</li>
		<li>
			{!! Form::label('plantTypeId', 'PlantTypeId:') !!}
			{!! Form::text('plantTypeId') !!}
		</li>
		<li>
			{!! Form::label('plantName', 'PlantName:') !!}
			{!! Form::text('plantName') !!}
		</li>
		<li>
			{!! Form::label('daysOld', 'DaysOld:') !!}
			{!! Form::text('daysOld') !!}
		</li>
		<li>
			{!! Form::label('birthday', 'Birthday:') !!}
			{!! Form::text('birthday') !!}
		</li>
		<li>
			{!! Form::label('plantMaturity', 'PlantMaturity:') !!}
			{!! Form::text('plantMaturity') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}