        //Tausta väärit vaihtu painamalla nappulla scriptit, 
        //jokasella sivulla kun painettu localStorgae sailyttä sen toiminton scriptit
        
        function getBackground() {
            //Tässä haetaan localStorage
            /* document.body.classList.add("bodybgGradient"); */
            const background = localStorage.getItem('background');
            console.log(background);
            document.body.classList.add(background);
            if (background == null) {
                document.body.classList.add("bodybgGradient");
            } else {
                document.body.classList.add(background);
            }
        }

        function changeGradient() {
            document.body.classList.remove("bodybgBlue");
            document.body.classList.add("bodybgGradient");
            localStorage.setItem("background", "bodybgGradient");
            console.log('toimi');
            // laita local storageen talteen muuttuja 
        }

        function changeBlue() {
            document.body.classList.remove("bodybgGradient");
            document.body.classList.add("bodybgBlue");
            localStorage.setItem("background", "bodybgBlue");
        }

       /*  to check that local storage is supported by other browsers */
         /* if (typeof(Storage) !== "undefined") { */