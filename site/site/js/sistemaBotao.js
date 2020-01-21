  var disponiveis = 4;
        var vagas = 0;


        function reservarVagas() {

            var codigo = Math.floor(Math.random() * 10000);
            var timer = (new Date);

          
           
           
            if (codigo < 10) {

                vagas = vagas + 1;
                disponiveis = 4 - vagas;

                console.log(timer);
                console.log("Numero de vagas disponives: " + disponiveis)
                console.log("Seu codigo e: 000" + codigo)
                console.log("=========================================================")
            }
            else if (codigo < 100) {

                vagas = vagas + 1;
                disponiveis = 4 - vagas;

                console.log(timer);
                console.log("Numero de vagas disponives: " + disponiveis)
                console.log("Seu codigo e: 00" + codigo)
                console.log("=========================================================")
            }
            else if (codigo < 1000) {

                vagas = vagas + 1;
                disponiveis = 4 - vagas;

                console.log(timer);
                console.log("Numero de vagas disponives: " + disponiveis)
                console.log("Seu codigo e: 0" + codigo)
                console.log("=========================================================")
            }

            else if (disponiveis < 1) {
                console.error("Todas as vagas estao ocupadas: ");


            }
            else if (disponiveis > 4) {
                console.error("Impossivel Liberar vagas")
            }
            else {
                vagas = vagas + 1;
                disponiveis = 4 - vagas;

                console.log(timer);
                console.log("Numero de vagas disponives: " + disponiveis)
                console.log("Seu codigo e: " + codigo)
                console.log("=========================================================")
            }

        }

        function liberarVagas() {


            var timer = (new Date);

            if (disponiveis < 0) {

                disponiveis = 4 - vagas;

            }
            else if (disponiveis > 3) {
                console.error("Impossivel Liberar vagas")
            }
            else {
                vagas = vagas - 1;
                disponiveis = 4 - vagas;

                console.log(timer);
                console.log("Numero de vagas disponives: " + disponiveis)
                console.log("=========================================================")
            }

        }
