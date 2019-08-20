{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('userId', 'UserId:') !!}
			{!! Form::text('userId') !!}
		</li>
		<li>
			{!! Form::label('plantInstanceId', 'PlantInstanceId:') !!}
			{!! Form::text('plantInstanceId') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('dueDate', 'DueDate:') !!}
			{!! Form::text('dueDate') !!}
		</li>
		<li>
			{!! Form::label('isComplete', 'IsComplete:') !!}
			{!! Form::text('isComplete') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}