<template>
  <div>
<div  class="container main" style="margin-bottom: 15em;">
  <form action="#" @submit.prevent="addIt()">
    <div class="row">
      <div class="col-md-12 col-xs-12">
                <label for="product" class="col-2 col-form-label">Product Name:</label>
                <input v-model="task.product" type="text" placeholder="Enter Product Name" style="text-transform: capitalize;" class="form-control" autofocus>

    </div>
  </div>
      <div class="row">
        <div class="col-md-12">
          <label for="quantity" class="col-2 col-form-label">Quantity: </label>
          <input class="form-control" type="tel"  placeholder="Enter Quantity" v-model="task.quantity">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="price" class="col-2 col-form-label">Price Per Unit: </label>
          <input class="form-control" type="tel"  placeholder="Enter Price" v-model="task.price">
        </div>
      </div>

    <div class="row marg">
      <div class="col-md-12">

            <span class="">
                  <button type="submit"  class="btn btn-primary">Add Info</button>
              </span>
          </div>
  </div>
  </form>
  <div class="row marg">
    <div class="col-md-12">
      <input class="form-control" placeholder="Search By Product Name" type="search" v-model="search">
    </div>
  </div>
  <div class="row marg">
    <div class="col-md-12">
      <transition-group name="list" tag="div">
               <span class="list-group-item item-list" v-for="(task, index) in searchIt" :key='task'>

                  <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true" @click="deleteIt(task.id)">&times;</span>
                  </button>
                <label for="input" class="row-form-label"><span>Name:</span> {{task.product}}</label>
                <br><label for="input" class="row-form-label">Quantity: <span class="badge">{{task.quantity}}</span></label>
                <br><label for="input" class="row-form-label">Price Per Unit: <span class="badge">${{task.price}}</span></label>
                <br><label for="input" class="row-form-label">Created On: <span class="badge">{{ task.created_at | moment("MMMM Do, YYYY" ) }}</span></label>
                <br><label for="input" class="row-form-label">Total: <span class="badge">${{task.total}}</span></label>
              </span>
      </transition-group>
    </div>
  </div>
<div class="row">
  <div class="col-md-12">
    <span class="list-group-item item-list">
      <h1>Total Price of All Items: {{getTotal}}</h1>
    </span>
  </div>
</div>

</div>
</div>

</template>

<script>
    export default {


        data() {
            return {
                final: 0,
                search: '',
                list: [],
                task: {
                    product: '',
                    quantity: '',
                    price: '',
                    total: '',
                    created_at: 0,

                }
            };
          },
            created() {
            this.fetchIt();

      },

        methods: {


          fetchIt() {
                axios.get('api/tasks').then((res) => {
                    this.list = res.data;
                    var all_totals = res.data;
                    var final = [];
                    for ( var i in all_totals) {
                        var totals = all_totals[i].total;
                        final.push(totals);
                    }

                    var result = final.reduce((acc, cv) => acc + cv);

                    console.log(result);
                });
            },

            addIt() {
                axios.post('api/tasks', this.task, this.task.total = this.task.quantity * this.task.price,)

                    .then((res) => {
                        this.task.product = '';
                        this.task.quantity = '';
                        this.task.price = '';
                        this.task.total = '';
                        this.fetchIt();
                    })
                    .catch((err) => console.error(err));
            },

            deleteIt(id) {
                axios.delete('api/tasks/' + id)
                    .then((res) => {
                        this.fetchIt()
                    })
                    .catch((err) => console.error(err));
            },

        },
      computed: {
        searchIt: function() {
              return this.list.filter((task) => {
              return task.product.toLowerCase().match(this.search.toLowerCase());
            });
        },

        getTotal: function() {
            var all_totals = this.list;
            var final = [];
            for (var i in all_totals) {
                var totals = all_totals[i].total;
                final.push(totals);
                var result = final.reduce((acc, cv) => acc + cv);
              }
              return "$" + result;
        },
  }
}


</script>


<!-- getTotal: function() {
    axios.get('api/tasks').then((res) => {
        this.list = res.data;
        var all_totals = res.data;
        var final = [];
        for ( var i in all_totals) {
            var totals = all_totals[i].total;
            final.push(totals);
            var result = final.reduce((acc, cv) => acc + cv);
        }

        console.log(result);

    }
   res.result + "Money"
);

}, -->
