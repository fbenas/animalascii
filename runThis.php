<?php

	getLoopInput();
	exit;
	function read_stdin()
	{
        	$fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
	        $input = fgets($fr,128);        // read a maximum of 128 characters
	        $input = rtrim($input);         // trim any trailing spaces.
        	fclose ($fr);                   // close the file handle
	        return $input;                  // return the text entered
	}

	function getLoopInput()
	{
		// Keep this updated.
		$animalList = "dog, cat, wolf, chicken, pig, horse, cow, owl, squirrel, elephant, rabbit, fish, turtle\n";
		
		//gets messy here

		$stringcat = <<<'EOD'
                     _|\
                    \` ..\
               __,.-\" =__Y=
             ."        )
       _    /   ,    \/\_
      ((____|    )_-\ \_-`
    cat-----'`-----` `--` 

EOD;
		$stringdog= <<<'EOD'

                              ,___.
                             |-----|            
                           ============
                           / |  OO  ~\          
                          (  )      0 )             
                           \_/-, ,-//-\\            
                              ====                               
                               |||      
                              | ||        
                              -_/|
                               | ||_
                              (____)) 

EOD;
		$stringwolf= <<<'EOD'

               .-'''''-.
             .'         `.
            :             :
           :               :
           :      _/|      :
            :   =/_/      :
             `._/ |     .'
          (   /  ,|...-'
           \_/^\/||__
        _/~  `""~`"` \_
     __/  -'/  `-._ `\_\__
   /wolf /-'`  `\   \  \-.\

EOD;
		$stringchicken= <<<'EOD'
     _
   _/ }
  `>' \
   `|  \
    |  /'-.    .-.
    \'   ';`--' .'
     \'.   `'-./
      '.`"-..-;`
        `;-..'
        _| _|chicken
        /` /`

EOD;
		$stringpig = <<<'EOD'
             --.__.--
          ___\(0_0)
       ~~/     (OO)
         \pig _ /
          `='`='=

EOD;
		$stringhorse= <<<'EOD'
     >>\.
    /_  )`.
   /  _)`^)`.   _.---. _
  (_,' \  `^-)""      `.\
        | Horse        | \
        \              / |
       / \  /.___.'\  (\ (_
      < ,"||     \ |`. \`-'
       \\ ()      )|  )/
       |_>|>     /_] //
         /_]        /_]

EOD;
		$stringcow= <<<'EOD'
    ,    Cow    ,
   /             \
  ((__-^^-,-^^-__))
   `-_---' `---_-'
    <__|o` 'o|__>
       \  `  /
        ): :(
        :o_o:
         "-" 

EOD;
		$stringowl= <<<'EOD'
						  
                   __              __
                   \ `-._......_.-` /
                    `.  '.    .'  .'
                     //  _`\/`_  \\
                    ||  /\O||O/\  ||
                    |\  \_/||\_/  /|
                    \ '.   \/   .' /
                    / ^ `'~  ~'`   \
                   /  _-^_~ -^_ ~-  |
                   | / ^_ -^_- ~_^\ |
                   | |~_ ^- _-^_ -| |
                   | \  ^-~_ ~-_^ / |
                   \_/;-.,____,.-;\_/
            ==========(_(_(==)_)_)=========
				Owl
           ==================================

EOD;

		$stringsquirrel = <<<'EOD'

					
   (\__/)  .~    ~. ))
   /O O  ./      .'
  {O__,   \    {
    / .  . )    \
    |-| '-' \    } ))
   .(   _(   )_.'
  '---.~_ _ _&       

EOD;
		$stringrabbit = <<<'EOD'
	            
              \\\,_
               \` ,\
          __,.-" =__)
        ."        )
     ,_/   ,    \/\_
     \_|    )_-\ \_-`
        `-----` `--`  

EOD;
		$stringturtle = <<<'EOD'

      _____     ____
    /      \  |  o | 
   |        |/ ___\| 
   |_________/     
   |_|_| |_|_|  

EOD;
		$stringelephant = <<<'EOD'

                       ___     _,.--.,_
                 .-~   ~--"~-.   ._ "-.
                /      ./_    Y    "-. \
               Y       :~     !         Y
               lq p    |     /         .|
            _   \. .-, l    /          |j
           ()\___) |/   \_/";          !
            \._____.-~\  .  ~\.      ./
                       Y_ Y_. "vr"~  T
                       (  (    |L    j   
                       [nn[nn..][nn..]
                   ~~~~~~~~~~~~~~~~~~~~~~~

EOD;
		$stringfish = <<<'EOD'

      |\   \\\\__     o
      | \_/    o \    o 
      > _   (( <_  oo  
      | / \__+___/      
     |/     |/

EOD;

		while("yea"=="yea")
		{
			echo "Choose an animal!\n";
			//get input
			$in = read_stdin();
			
			switch($in)
			{
				case "dog":
					echo $stringdog;
					break;
				case "cat":
					echo $stringcat;
					break;
				case "pig":
					echo $stringpig;
					break;
				case "horse":
					echo $stringhorse;
					break;
				case "cow":
					echo $stringcow;
					break;
				case "chicken":
					echo $stringchicken;
					break;
				case "owl":
					echo $stringowl;
					break;
				case "wolf":
					echo $stringwolf;
					break;
				case "turtle":
					echo $stringturtle;
					break;
				case "elephant":
					echo $stringelephant;
					break;
				case "rabbit":
					echo $stringrabbit;
					break;
				case "squirrel":
					echo $stringsquirrel;
					break;
				case "fish":
					echo $stringfish;
					break;
				case "list":
					echo $animalList;
					break;
				default:
					echo "Animal not found, to see available animals, type 'list'.\n";
					break;
			}
		}
	}
?>
