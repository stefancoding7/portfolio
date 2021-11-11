@extends('admin.layouts.app')
@section('content')


  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">REST API Documentation</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
         <!-- Begin Page Content -->
         <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800"></h1>
            <p class="mb-4">All API routes start with <b>api/</b> than required route. (api/profile)</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Method</th>
                                    <th>URL</th>
                                    
                                    <th>Functionality</th>
                                    <th>Example</th>
                                  
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Method</th>
                                    <th>URL</th>
                                    
                                    <th>Functionality</th>
                                    <th>Example</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td><b class="method-get">GET</b></td>
                                    <td>/profile</td>
                                    <td><b>profile->avatar</b> = get avatar picture<br>
                                        <b>profile->logo</b> = get logo of web page<br>
                                        <b>profile->site_switch</b> = <b>true</b> or <b>false</b> (For shut down the website if need maintrance) <br>
                                        <b>profile->short_info</b> = Short info with HTML rendering. Use with any textarea. Also works with any className
                                         and HTML elemets. Use <span class="inline-code">dangerouslySetInnerHTML</span><br>
                                    </td>
                                    <td>
                                        
                                        <pre><code>
const [profile, setProfile] = useState([]);

useEffect(() => {
    axios.get(`${config.apiBaseUrl}<b class="lighter">profile</b>`).then((response) => {
        setProfile(response.data);
    });
    }, []);

src={`${config.imagesUrl + <b class="lighter">profile.avatar</b>}`}

           
                                            </code></pre>   
                                    </td>
                                   
                                    
                                </tr>
                               <tr>
                                <td><b class="method-get">GET</b></td>
                                <td>/projects</td>
                                <td><b>project->title</b> = Project title<br>
                                <b>project->description</b> = Project description<br>
                                <b>project->image</b> = Project image<br>
                                <b>project->tags</b> = Project tags<br>
                                <b>project->source_link</b> = Project source code link<br>
                                <b>project->demo_link</b> = Project demo link<br>
                                <b>project->short_by</b> = Show projects by DESC.<br>
                                </td>
                                <td>
                                        
                                    <pre><code>
const [project, setProject] = useState([]);

useEffect(() => {
axios.get(`${config.apiBaseUrl}<b class="lighter">projects</b>`).then((response) => {
    setProfile(response.data);
});
}, []);

{project.map((list, index) => (

src= {`${config.imagesUrl + list.image}`} alt={list.title}

))}

       
                                        </code></pre>   
                                </td>
                               </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

       
    </div>

    
    

</div>
<!-- /.container-fluid -->



@stop