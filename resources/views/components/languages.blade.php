<div class="container px-5 my-5">
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <section>
                <h2 class="text-secondary fw-bolder mb-4"><div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div><span class="text-gradient d-inline ">Languages</span></h2>
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div id="language-list" class="row row-cols-1 row-cols-md-3 mb-4">
                            

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

{{-- <script>

     LanguageList()
    async function LanguageList()
    {

        try{

            let URL = '/languageData'
            const response = await axios.get(URL);

            response.data.forEach((item)=>{

                document.getElementById('language-list').innerHTML+=(` <div class="row    
                row-cols-1 row-cols-md-3 mb-4">
                
                <div class="col p-2 mb-4 mb-md-0">
                
                 <div class="d-flex align-items-center bg-light rounded-4 p-3 
                
                h-100">${item['name']}</div>

                    </div>`)

            })
            
        }
        catch (error)
        {
           alert(error);
        }
        

    }

    </script> --}}


<script>
    LanguageList();
    async function LanguageList() {
       try {
           let URL='/languagesData'


           let response = await axios.get(URL);


        //    debugger;
           document.getElementById('loading-div').classList.add('d-none');
           document.getElementById('content-div').classList.remove('d-none');


           response.data.forEach((item)=>{
                document.getElementById('language-list').innerHTML += 

                (`
              
                <div class="col p-2 mb-4 mb-md-0">
                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                       ${item['name']}
                    </div>
                    </div>
                    `)
           })

        } catch (error) {
            alert(error);
       }
       let result =  await axios.get(URl);
    }
</script>
