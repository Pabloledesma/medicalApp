<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Medical App</title>

    </head>
    <body>
            
            <h2>Panel de control</h2>
           
           <ul>
           		@can('edit_forum')
           		<li>
					<a href="#">Edit the forum</a>
           		</li>
				@endcan
           		@can('manage_money')
           		<li>
					<a href="#">Manage the money</a>
           		</li>
				@endcan
           </ul>
			

			
    </body>
</html>
