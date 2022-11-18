function timeConvert(e){var t=new Date(e);time_s=t.getHours()+":"+t.getMinutes();var a=time_s.split(":"),e=a[0],t=a[1],a=12<=e?"PM":"AM";return(e=(e%=12)||12)+":"+(t=t<10?"0"+t:t)+a}function formatDate(e){var t=new Date(e),a=""+["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"][t.getMonth()],e=""+t.getDate(),t=t.getFullYear();return a.length<2&&(a="0"+a),[(e=e.length<2?"0"+e:e)+" "+a,t].join(", ")}var checkAll=document.getElementById("checkAll");checkAll&&(checkAll.onclick=function(){for(var e=document.querySelectorAll('.form-check-all input[type="checkbox"]'),t=0;t<e.length;t++)e[t].checked=this.checked,e[t].checked?e[t].closest("tr").classList.add("table-active"):e[t].closest("tr").classList.remove("table-active")});var perPage=8,options={valueNames:["id","name","company_name","designation","date","email_id","phone","lead_score"],page:perPage,pagination:!0,plugins:[ListPagination({left:2,right:2})]},contactList=new List("contactList",options).on("updated",function(e){0==e.matchingItems.length?document.getElementsByClassName("noresult")[0].style.display="block":document.getElementsByClassName("noresult")[0].style.display="none";var t=1==e.i,a=e.i>e.matchingItems.length-e.page;document.querySelector(".pagination-prev.disabled")&&document.querySelector(".pagination-prev.disabled").classList.remove("disabled"),document.querySelector(".pagination-next.disabled")&&document.querySelector(".pagination-next.disabled").classList.remove("disabled"),t&&document.querySelector(".pagination-prev").classList.add("disabled"),a&&document.querySelector(".pagination-next").classList.add("disabled"),e.matchingItems.length<=perPage?document.querySelector(".pagination-wrap").style.display="none":document.querySelector(".pagination-wrap").style.display="flex",0<e.matchingItems.length?document.getElementsByClassName("noresult")[0].style.display="none":document.getElementsByClassName("noresult")[0].style.display="block"});const xhttp=new XMLHttpRequest;xhttp.onload=function(){JSON.parse(this.responseText).forEach(function(e){contactList.add({id:'<a href="javascript:void(0);" class="fw-medium link-primary">#VZ'+e.id+"</a>",name:e.name,company_name:e.company_name,designation:e.designation,date:formatDate(e.date)+' <small class="text-muted">'+timeConvert(e.date)+"</small>",email_id:e.email_id,phone:e.phone,lead_score:e.lead_score})}),contactList.remove("id",'<a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a>')},xhttp.open("GET","assets/json/contact-list.json"),xhttp.send(),isCount=(new DOMParser).parseFromString(contactList.items.slice(-1)[0]._values.id,"text/html");var isValue=isCount.body.firstElementChild.innerHTML,idField=document.getElementById("id-field"),customerNameField=document.getElementById("customername-field"),company_nameField=document.getElementById("company_name-field"),designationField=document.getElementById("designation-field"),email_idField=document.getElementById("email_id-field"),phoneField=document.getElementById("phone-field"),lead_scoreField=document.getElementById("lead_score-field"),addBtn=document.getElementById("add-btn"),editBtn=document.getElementById("edit-btn"),removeBtns=document.getElementsByClassName("remove-item-btn"),editBtns=document.getElementsByClassName("edit-item-btn");viewBtns=document.getElementsByClassName("view-item-btn"),refreshCallbacks(),document.getElementById("showModal").addEventListener("show.bs.modal",function(e){e.relatedTarget.classList.contains("edit-item-btn")?(document.getElementById("exampleModalLabel").innerHTML="Edit Contact",document.getElementById("showModal").querySelector(".modal-footer").style.display="block",document.getElementById("add-btn").style.display="none",document.getElementById("edit-btn").style.display="block"):e.relatedTarget.classList.contains("add-btn")?(document.getElementById("exampleModalLabel").innerHTML="Add Contact",document.getElementById("showModal").querySelector(".modal-footer").style.display="block",document.getElementById("edit-btn").style.display="none",document.getElementById("add-btn").style.display="block"):(document.getElementById("exampleModalLabel").innerHTML="List Contact",document.getElementById("showModal").querySelector(".modal-footer").style.display="none")}),ischeckboxcheck(),document.getElementById("showModal").addEventListener("hidden.bs.modal",function(){clearFields()}),document.querySelector("#contactList").addEventListener("click",function(){refreshCallbacks(),ischeckboxcheck()});var table=document.getElementById("customerTable"),tr=table.getElementsByTagName("tr"),trlist=table.querySelectorAll(".list tr"),count=Number(isValue.replace(/[^0-9]/g,""))+1;function ischeckboxcheck(){document.getElementsByName("checkAll").forEach(function(e){e.addEventListener("click",function(e){e.target.checked?e.target.closest("tr").classList.add("table-active"):e.target.closest("tr").classList.remove("table-active")})})}function refreshCallbacks(){removeBtns.forEach(function(e){e.addEventListener("click",function(e){e.target.closest("tr").children[1].innerText,itemId=e.target.closest("tr").children[1].innerText,contactList.get({id:itemId}).forEach(function(e){deleteid=(new DOMParser).parseFromString(e._values.id,"text/html");var t=deleteid.body.firstElementChild;deleteid.body.firstElementChild.innerHTML==itemId&&document.getElementById("delete-record").addEventListener("click",function(){contactList.remove("id",t.outerHTML),document.getElementById("deleteRecordModal").click()})})})}),editBtns.forEach(function(e){e.addEventListener("click",function(e){e.target.closest("tr").children[1].innerText,itemId=e.target.closest("tr").children[1].innerText,contactList.get({id:itemId}).forEach(function(e){isid=(new DOMParser).parseFromString(e._values.id,"text/html");var t=isid.body.firstElementChild.innerHTML;t==itemId&&(idField.value=t,customerNameField.value=e._values.name,company_nameField.value=e._values.company_name,designationField.value=e._values.designation,email_idField.value=e._values.email_id,phoneField.value=e._values.phone,lead_scoreField.value=e._values.lead_score)})})}),viewBtns.forEach(function(e){e.addEventListener("click",function(e){console.log("clcik"),e.target.closest("tr").children[1].innerText,itemId=e.target.closest("tr").children[1].innerText,contactList.get({id:itemId}).forEach(function(e){isid=(new DOMParser).parseFromString(e._values.id,"text/html"),isid.body.firstElementChild.innerHTML==itemId&&(e=`
                        <div class="card-body text-center">
                            <div class="position-relative d-inline-block">
                                <img src="assets/images/users/avatar-10.jpg" alt=""
                                    class="avatar-lg rounded-circle img-thumbnail">
                                <span class="contact-active position-absolute rounded-circle bg-success"><span
                                        class="visually-hidden"></span>
                            </div>
                            <h5 class="mt-4 mb-1">${e._values.name}</h5>
                            <p class="text-muted">${e._values.company_name}</p>

                            <ul class="list-inline mb-0">
                                <li class="list-inline-item avatar-xs">
                                    <a href="javascript:void(0);"
                                        class="avatar-title bg-soft-success text-success fs-15 rounded">
                                        <i class="ri-phone-line"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item avatar-xs">
                                    <a href="javascript:void(0);"
                                        class="avatar-title bg-soft-danger text-danger fs-15 rounded">
                                        <i class="ri-mail-line"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item avatar-xs">
                                    <a href="javascript:void(0);"
                                        class="avatar-title bg-soft-warning text-warning fs-15 rounded">
                                        <i class="ri-question-answer-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h6 class="text-muted text-uppercase fw-semibold mb-3">Personal Information</h6>
                            <p class="text-muted mb-4">Hello, I'm Tonya Noble, The most effective objective is
                                one that is tailored to the job you are applying for. It states what kind of
                                career you are seeking, and what skills and experiences.</p>
                            <div class="table-responsive table-card">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="fw-medium" scope="row">Designation</td>
                                            <td>${e._values.designation}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Email ID</td>
                                            <td>${e._values.email_id}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Phone No</td>
                                            <td>${e._values.phone}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Lead Score</td>
                                            <td>${e._values.lead_score}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Tags</td>
                                            <td>
                                                <span class="badge badge-soft-primary">Lead</span>
                                                <span class="badge badge-soft-primary">Partner</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Last Contacted</td>
                                            <td>${e._values.date} <small class="text-muted"></small></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>`,document.getElementById("contact-view-detail").innerHTML=e)})})})}function clearFields(){customerNameField.value="",company_nameField.value="",designationField.value="",email_idField.value="",phoneField.value="",lead_scoreField.value=""}function deleteMultiple(){ids_array=[];for(var e,t=document.getElementsByName("chk_child"),a=0;a<t.length;a++)1==t[a].checked&&(e=t[a].parentNode.parentNode.parentNode.querySelector(".id a").innerHTML,ids_array.push(e));if("undefined"!=typeof ids_array&&0<ids_array.length){if(!confirm("Are you sure you want to delete this?"))return!1;ids_array.forEach(function(e){contactList.remove("id",`<a href="javascript:void(0);" class="fw-medium link-primary">${e}</a>`)}),document.getElementById("checkAll").checked=!1}else alert("Please Select Atleast One Checkbox")}addBtn.addEventListener("click",function(e){""!==customerNameField.value&&""!==company_nameField.value&&""!==email_idField.value&&""!==phoneField.value&&""!==lead_scoreField.value&&""!==designationField.value&&(contactList.add({id:'<a href="javascript:void(0);" class="fw-medium link-primary">#VZ'+count+"</a>",name:customerNameField.value,company_name:company_nameField.value,designation:designationField.value,email_id:email_idField.value,phone:phoneField.value,lead_score:lead_scoreField.value}),document.getElementById("close-modal").click(),clearFields(),refreshCallbacks(),count++)}),editBtn.addEventListener("click",function(e){document.getElementById("exampleModalLabel").innerHTML="Edit Contact",contactList.get({id:idField.value}).forEach(function(e){isid=(new DOMParser).parseFromString(e._values.id,"text/html"),isid.body.firstElementChild.innerHTML==itemId&&e.values({id:'<a href="javascript:void(0);" class="fw-medium link-primary">'+idField.value+"</a>",name:customerNameField.value,company_name:company_nameField.value,designation:designationField.value,email_id:email_idField.value,phone:phoneField.value,lead_score:lead_scoreField.value,date:"-----"})}),document.getElementById("close-modal").click(),clearFields()}),document.querySelector(".pagination-next").addEventListener("click",function(){!document.querySelector(".pagination.listjs-pagination")||document.querySelector(".pagination.listjs-pagination").querySelector(".active")&&document.querySelector(".pagination.listjs-pagination").querySelector(".active").nextElementSibling.children[0].click()}),document.querySelector(".pagination-prev").addEventListener("click",function(){!document.querySelector(".pagination.listjs-pagination")||document.querySelector(".pagination.listjs-pagination").querySelector(".active")&&document.querySelector(".pagination.listjs-pagination").querySelector(".active").previousSibling.children[0].click()});