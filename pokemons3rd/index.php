<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemons 3rd</title>
</head>
<body>
<button id="previous">Previous</button>
<button id="next">Next</button><br>
<button id=0>Page 0</button>
<button id=1>Page 1</button>
<button id=2>Page 2</button>
<button id=3>Page 3</button>
<button id=4>Page 4</button>
<button id=5>Page 5</button>
<button id=6>Page 6</button>
<button id=7>Page 7</button>
<button id=8>Page 8</button>
<button id=9>Page 9</button>
<button id=10>Page 10</button>
<button id=11>Page 11</button>
<button id=12>Page 12</button>
<button id=13>Page 13</button>
<button id=14>Page 14</button>
<button id=15>Page 15</button>
<button id=16>Page 16</button>
<button id=17>Page 17</button>
<button id=18>Page 18</button>
<button id=19>Page 19</button>
<button id=20>Page 20</button>
<button id=21>Page 21</button>
<button id=22>Page 22</button><br>

<a href="./new_pokemon.php">Add new Pokemon</a>

<div id="text">
    <div class="pokemon_name"></div>
    <div class="pokemon_url"></div>
</div>

   <script>
   let currentPage = 0;

   function getNewPage(pageNumber) {
        let pokemons = [];
        document.getElementById("text").innerHTML= "";
        fetch(`pokemon_formatter.php?page=${pageNumber}`)
            .then((response) => {
            // console.log(response);
            return response.json();
            })
            .then((data) => {
            console.log(data);
            pokemons = data;
            // adding pokemons
            for(let i=0; i < 50; i++) {
                const newPokemon = document.createElement('div');
                newPokemon.className = "pokemon_name";
                newPokemon.innerText = ` ${pokemons[i].name} ${pokemons[i].url}  `;
                document.getElementById("text").appendChild(newPokemon);
                // document.getElementById("text").appendChild(document.createTextNode(` ${pokemons[i].name} ${pokemons[i].url} `));  
            }
           
            });
   }   

        // next button
        document.getElementById("next").addEventListener('click', (e) => {
            if (currentPage == 22) {
                document.getElementById("next").disabled = true;
            } else {
            currentPage++;
            getNewPage(currentPage);
            document.getElementById("previous").disabled = false;
            }
            })

        //    previous button 
        document.getElementById("previous").addEventListener('click', (e) => {
            if (currentPage == 0) {
                document.getElementById("previous").disabled = true;
            } else {
                document.getElementById("next").disabled = false;
                currentPage--;
                getNewPage(currentPage);
            }
          
            })

            // numbered buttons
            for (let i = 0; i < 23; i++) {
                document.getElementById(i).addEventListener('click', (e) => {
                   
                    currentPage = i;
                    getNewPage(currentPage);
                })
            }
   
   </script> 
</body>
</html>