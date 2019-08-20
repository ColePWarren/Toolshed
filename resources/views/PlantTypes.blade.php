{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('userId', 'UserId:') !!}
			{!! Form::text('userId') !!}
		</li>
		<li>
			{!! Form::label('plantName', 'PlantName:') !!}
			{!! Form::text('plantName') !!}
		</li>
		<li>
			{!! Form::label('maxPH', 'MaxPH:') !!}
			{!! Form::text('maxPH') !!}
		</li>
		<li>
			{!! Form::label('minPH', 'MinPH:') !!}
			{!! Form::text('minPH') !!}
		</li>
		<li>
			{!! Form::label('maxTemp', 'MaxTemp:') !!}
			{!! Form::text('maxTemp') !!}
		</li>
		<li>
			{!! Form::label('minTemp', 'MinTemp:') !!}
			{!! Form::text('minTemp') !!}
		</li>
		<li>
			{!! Form::label('minDailySunlightHours', 'MinDailySunlightHours:') !!}
			{!! Form::text('minDailySunlightHours') !!}
		</li>
		<li>
			{!! Form::label('maxDailySunlightHours', 'MaxDailySunlightHours:') !!}
			{!! Form::text('maxDailySunlightHours') !!}
		</li>
		<li>
			{!! Form::label('dayToGerminate', 'DayToGerminate:') !!}
			{!! Form::text('dayToGerminate') !!}
		</li>
		<li>
			{!! Form::label('daysToHarvestFromGermination', 'DaysToHarvestFromGermination:') !!}
			{!! Form::text('daysToHarvestFromGermination') !!}
		</li>
		<li>
			{!! Form::label('desiredDaysBetweenHarvests', 'DesiredDaysBetweenHarvests:') !!}
			{!! Form::text('desiredDaysBetweenHarvests') !!}
		</li>
		<li>
			{!! Form::label('dollarValuePerHarvest', 'DollarValuePerHarvest:') !!}
			{!! Form::text('dollarValuePerHarvest') !!}
		</li>
		<li>
			{!! Form::label('seedlingNutrientNeeds', 'SeedlingNutrientNeeds:') !!}
			{!! Form::text('seedlingNutrientNeeds') !!}
		</li>
		<li>
			{!! Form::label('vegitativeNutrientNeeds', 'VegitativeNutrientNeeds:') !!}
			{!! Form::text('vegitativeNutrientNeeds') !!}
		</li>
		<li>
			{!! Form::label('bloomingNutrientNeets', 'BloomingNutrientNeets:') !!}
			{!! Form::text('bloomingNutrientNeets') !!}
		</li>
		<li>
			{!! Form::label('pruningTips', 'PruningTips:') !!}
			{!! Form::text('pruningTips') !!}
		</li>
		<li>
			{!! Form::label('imageLink', 'ImageLink:') !!}
			{!! Form::text('imageLink') !!}
		</li>
		<li>
			{!! Form::label('daysToVegitativeFromGermination', 'DaysToVegitativeFromGermination:') !!}
			{!! Form::text('daysToVegitativeFromGermination') !!}
		</li>
		<li>
			{!! Form::label('daysToBloomFromGermination', 'DaysToBloomFromGermination:') !!}
			{!! Form::text('daysToBloomFromGermination') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}