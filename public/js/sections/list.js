new Vue({
  el:"#list",
  mounted(){
    this.listaElementos();
  },
  data:{
    vuelos: null,
    hoteles: null,
    vuelo_selected: "",
    hotel_selected: "",
    num_lugares : 0,
    total: 0
  },
  methods: {
    listaElementos: function(){
    	//Uso de Axios es igual que ajax
      axios.get('/api/listado')
        .then( (response) => {
          this.vuelos = response.data.vuelos;
          this.hoteles = response.data.hoteles;
      });
    },

    //Funcion para añadir vuelo a cotizador
    addquotingT: function(vuelo){
      swal({
        text: 'Numero de lugares',
        content: "input",
        button: {
          text: "Siguiente",
          closeModal: false,
        },
      })
      .then(lugares => {
        this.num_lugares = lugares;
        this.vuelo_selected = vuelo;
        this.total = this.num_lugares * this.vuelo_selected.costo;
        $('#t_travel').hide();
        $('#t_hotel').show();
        swal.close();
      });
    },
    //Funcion para añadir hotel a cotizador
    addquotingH: function(hotel){
      this.hotel_selected = hotel;
      $('#titulo_listado').hide();
      $('#t_hotel').hide();
      $('#list_cotizador').show();
    },

    enviarCotizacion: function(){
      axios.post('/api/postCotizacion', {
        vuelo: this.vuelo_selected,
        hotel: this.hotel_selected,
        total: this.total,
        lugares: this.num_lugares
      })
      .then(function (response) {
        swal({
          title: "Cotización correctamente!",
          text: "Se genero correctamente el PDF de la cotizacion",
          icon: "success",
        });
        window.location.replace("../cotizador");
      })
    }
  }
});
