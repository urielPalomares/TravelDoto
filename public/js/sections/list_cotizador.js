new Vue({
  el:"#list-cot",
  mounted(){
    this.listaElementos();
  },
  data:{
    cotizaciones: null,
    config: null,
    pages: [],
    vuelo: [],
    hotel: [],
    totales: []
  },
  methods: {
    listaElementos: function(){
    	//Uso de Axios es igual que ajax
      axios.get('/api/listado_cotizaciones')
        .then( (response) => {
          this.cotizaciones = response.data.data;
          this.config = response.data;
          for (var i = this.config.current_page; i <= (this.config.total / this.config.per_page); i++) {
            this.pages[i-1] = i;
          }
      });
    },
    lastPage: function(nom_page){
      this.url = this.config.path + "?page=" + nom_page;
      axios.get(this.url)
        .then( (response) => {
          this.cotizaciones = response.data.data;
          this.config = response.data;
      });
    },
    nextPage: function(nom_page){
      this.url = this.config.path + "?page=" + nom_page;
      axios.get(this.url)
        .then( (response) => {
          this.cotizaciones = response.data.data;
          this.config = response.data;
      });
    },
    showDetails: function(cotizacion){
      axios.get('/api/cotizacionDetails/'+ cotizacion.id)
        .then( (response) => {
          this.vuelo = response.data.vuelo;
          this.hotel = response.data.hotel;
          this.totales = response.data.cotizacion;
          document.getElementById('myModal').style.display='block'
      });
    }
  }
});
