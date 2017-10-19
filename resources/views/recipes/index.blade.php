@extends('layouts.app')

@section('style')
    <style>
        td{
            cursor: pointer;
        }
    </style>
@endsection

@section('content')

    <div class="md-card">
        <div class="md-card-content">
            <div class="uk-overflow-container uk-margin-bottom">
                <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair"
                       id="ts_issues">
                    <thead>
                    <tr>
                        <th class="uk-text-center">Key</th>
                        <th>Title</th>
                        <th>Assignee</th>
                        <th>Priority</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="uk-text-center">Key</th>
                        <th>Title</th>
                        <th>Assignee</th>
                        <th>Priority</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>
                    <tbody>

                    <tr class='clickable-row' data-href='{{route('details')}}'>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-1</span></td>
                        <td>Quod recusandae accusantium quo ex.</td>
                        <td>Jamey Fritsch</td>
                        <td><span class="uk-badge uk-badge-danger">blocker</span></td>
                        <td class="uk-text-small">14/Jun/16</td>
                        <td class="uk-text-small">8/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-2</span></td>
                        <td>
                            <a href="page_issue_details.html"> Voluptatum numquam laudantium aut quas aperiam et sit
                                quos.</a>
                        </td>
                        <td>Brian Torp</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">8/Jun/16</td>
                        <td class="uk-text-small">27/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-3</span></td>
                        <td>
                            <a href="page_issue_details.html"> Libero est voluptatem non libero autem optio qui qui.</a>
                        </td>
                        <td>Tracy Quigley</td>
                        <td><span class="uk-badge uk-badge-warning">critical</span></td>
                        <td class="uk-text-small">23/Jun/16</td>
                        <td class="uk-text-small">18/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">open</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-4</span></td>
                        <td>
                            <a href="page_issue_details.html"> Voluptates libero at eaque blanditiis autem.</a>
                        </td>
                        <td>Icie Ruecker</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">17/Jun/16</td>
                        <td class="uk-text-small">11/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">open</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-5</span></td>
                        <td>
                            <a href="page_issue_details.html"> Tempore et quia hic.</a>
                        </td>
                        <td>Karine Kuhn</td>
                        <td><span class="uk-badge uk-badge-danger">blocker</span></td>
                        <td class="uk-text-small">17/Jun/16</td>
                        <td class="uk-text-small">16/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">open</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-6</span></td>
                        <td>
                            <a href="page_issue_details.html"> Velit a sint officiis officia aperiam.</a>
                        </td>
                        <td>Camryn Corwin</td>
                        <td><span class="uk-badge uk-badge-danger">blocker</span></td>
                        <td class="uk-text-small">15/Jun/16</td>
                        <td class="uk-text-small">22/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">open</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-7</span></td>
                        <td>
                            <a href="page_issue_details.html"> Maiores minima et impedit nesciunt quaerat et iste.</a>
                        </td>
                        <td>Wilmer Hintz</td>
                        <td><span class="uk-badge uk-badge-warning">critical</span></td>
                        <td class="uk-text-small">9/Jun/16</td>
                        <td class="uk-text-small">27/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-8</span></td>
                        <td>
                            <a href="page_issue_details.html"> Deserunt et omnis nostrum et beatae.</a>
                        </td>
                        <td>Anderson Gibson</td>
                        <td><span class="uk-badge uk-badge-info">minor</span></td>
                        <td class="uk-text-small">15/Jun/16</td>
                        <td class="uk-text-small">12/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-9</span></td>
                        <td>
                            <a href="page_issue_details.html"> Eum suscipit voluptatem animi harum similique
                                voluptatum.</a>
                        </td>
                        <td>Gunner Becker</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">24/Jun/16</td>
                        <td class="uk-text-small">17/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-10</span></td>
                        <td>
                            <a href="page_issue_details.html"> Error autem facere ipsam ducimus perferendis.</a>
                        </td>
                        <td>Myrtis Stehr</td>
                        <td><span class="uk-badge uk-badge-info">minor</span></td>
                        <td class="uk-text-small">25/Jun/16</td>
                        <td class="uk-text-small">21/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-11</span></td>
                        <td>
                            <a href="page_issue_details.html"> Odit aut hic quod iusto.</a>
                        </td>
                        <td>Lucinda Thompson</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">18/Jun/16</td>
                        <td class="uk-text-small">14/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-12</span></td>
                        <td>
                            <a href="page_issue_details.html"> Molestiae dolorem voluptates libero.</a>
                        </td>
                        <td>Hellen Lebsack</td>
                        <td><span class="uk-badge uk-badge-danger">blocker</span></td>
                        <td class="uk-text-small">23/Jun/16</td>
                        <td class="uk-text-small">19/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-13</span></td>
                        <td>
                            <a href="page_issue_details.html"> Saepe qui sint eum sapiente magni dolorem.</a>
                        </td>
                        <td>Zelda Simonis</td>
                        <td><span class="uk-badge uk-badge-danger">blocker</span></td>
                        <td class="uk-text-small">16/Jun/16</td>
                        <td class="uk-text-small">16/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-14</span></td>
                        <td>
                            <a href="page_issue_details.html"> Voluptatem ratione perspiciatis aliquam quia facere.</a>
                        </td>
                        <td>Claud Howell</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">24/Jun/16</td>
                        <td class="uk-text-small">27/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-15</span></td>
                        <td>
                            <a href="page_issue_details.html"> Ut eveniet ea est pariatur.</a>
                        </td>
                        <td>Dagmar Pagac</td>
                        <td><span class="uk-badge uk-badge-info">minor</span></td>
                        <td class="uk-text-small">12/Jun/16</td>
                        <td class="uk-text-small">23/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">open</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-16</span></td>
                        <td>
                            <a href="page_issue_details.html"> Iure aut perferendis voluptate est iste.</a>
                        </td>
                        <td>Weston Marquardt</td>
                        <td><span class="uk-badge uk-badge-info">minor</span></td>
                        <td class="uk-text-small">27/Jun/16</td>
                        <td class="uk-text-small">8/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-17</span></td>
                        <td>
                            <a href="page_issue_details.html"> Vel eveniet non vitae modi.</a>
                        </td>
                        <td>Amani Botsford</td>
                        <td><span class="uk-badge uk-badge-warning">critical</span></td>
                        <td class="uk-text-small">24/Jun/16</td>
                        <td class="uk-text-small">26/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">open</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-18</span></td>
                        <td>
                            <a href="page_issue_details.html"> Numquam ab odit iusto repellat iusto tenetur.</a>
                        </td>
                        <td>Elliot Franecki</td>
                        <td><span class="uk-badge uk-badge-info">minor</span></td>
                        <td class="uk-text-small">23/Jun/16</td>
                        <td class="uk-text-small">13/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">open</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-19</span></td>
                        <td>
                            <a href="page_issue_details.html"> Aliquam iusto dicta facilis et.</a>
                        </td>
                        <td>Halle Kilback</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">20/Jun/16</td>
                        <td class="uk-text-small">16/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-20</span></td>
                        <td>
                            <a href="page_issue_details.html"> Suscipit qui et non officia at.</a>
                        </td>
                        <td>Rosina Orn</td>
                        <td><span class="uk-badge uk-badge-danger">blocker</span></td>
                        <td class="uk-text-small">27/Jun/16</td>
                        <td class="uk-text-small">22/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-21</span></td>
                        <td>
                            <a href="page_issue_details.html"> Officia placeat iure tenetur.</a>
                        </td>
                        <td>George O'Kon</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">19/Jun/16</td>
                        <td class="uk-text-small">27/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-22</span></td>
                        <td>
                            <a href="page_issue_details.html"> Sit alias est minima ad sit ab vel aut.</a>
                        </td>
                        <td>Chaim Wiegand</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">9/Jun/16</td>
                        <td class="uk-text-small">8/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-23</span></td>
                        <td>
                            <a href="page_issue_details.html"> Labore quam optio pariatur quibusdam odit quidem
                                perferendis.</a>
                        </td>
                        <td>Hilario Mohr</td>
                        <td><span class="uk-badge uk-badge-danger">blocker</span></td>
                        <td class="uk-text-small">8/Jun/16</td>
                        <td class="uk-text-small">22/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-24</span></td>
                        <td>
                            <a href="page_issue_details.html"> Delectus eveniet sit cumque porro rerum quo eius.</a>
                        </td>
                        <td>Jasen Mueller</td>
                        <td><span class="uk-badge uk-badge-info">minor</span></td>
                        <td class="uk-text-small">23/Jun/16</td>
                        <td class="uk-text-small">19/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-25</span></td>
                        <td>
                            <a href="page_issue_details.html"> Modi ipsum facilis sint occaecati velit temporibus.</a>
                        </td>
                        <td>Cecile Johnson</td>
                        <td><span class="uk-badge uk-badge-danger">blocker</span></td>
                        <td class="uk-text-small">14/Jun/16</td>
                        <td class="uk-text-small">12/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-26</span></td>
                        <td>
                            <a href="page_issue_details.html"> Ut perspiciatis vel dolorem omnis provident.</a>
                        </td>
                        <td>Lionel Gutkowski</td>
                        <td><span class="uk-badge uk-badge-warning">critical</span></td>
                        <td class="uk-text-small">18/Jun/16</td>
                        <td class="uk-text-small">28/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-27</span></td>
                        <td>
                            <a href="page_issue_details.html"> Earum repellat quos blanditiis enim.</a>
                        </td>
                        <td>Korbin Bauch</td>
                        <td><span class="uk-badge uk-badge-warning">critical</span></td>
                        <td class="uk-text-small">20/Jun/16</td>
                        <td class="uk-text-small">9/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-28</span></td>
                        <td>
                            <a href="page_issue_details.html"> Mollitia molestiae esse et ut.</a>
                        </td>
                        <td>Clint Doyle</td>
                        <td><span class="uk-badge uk-badge-danger">blocker</span></td>
                        <td class="uk-text-small">22/Jun/16</td>
                        <td class="uk-text-small">22/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">open</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-29</span></td>
                        <td>
                            <a href="page_issue_details.html"> Non cupiditate hic aut eos ducimus eos reiciendis
                                repudiandae.</a>
                        </td>
                        <td>Clair Smith</td>
                        <td><span class="uk-badge uk-badge-warning">critical</span></td>
                        <td class="uk-text-small">14/Jun/16</td>
                        <td class="uk-text-small">21/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-30</span></td>
                        <td>
                            <a href="page_issue_details.html"> Eum beatae suscipit voluptas repellat officiis iure
                                nobis.</a>
                        </td>
                        <td>Joseph Haag</td>
                        <td><span class="uk-badge uk-badge-danger">blocker</span></td>
                        <td class="uk-text-small">20/Jun/16</td>
                        <td class="uk-text-small">28/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-31</span></td>
                        <td>
                            <a href="page_issue_details.html"> Impedit est est qui repellendus quibusdam.</a>
                        </td>
                        <td>Hardy Powlowski</td>
                        <td><span class="uk-badge uk-badge-warning">critical</span></td>
                        <td class="uk-text-small">11/Jun/16</td>
                        <td class="uk-text-small">10/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-32</span></td>
                        <td>
                            <a href="page_issue_details.html"> In quis aut ut eos ad.</a>
                        </td>
                        <td>Tavares Torphy</td>
                        <td><span class="uk-badge uk-badge-warning">critical</span></td>
                        <td class="uk-text-small">20/Jun/16</td>
                        <td class="uk-text-small">8/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-33</span></td>
                        <td>
                            <a href="page_issue_details.html"> Quia ut sed aut dolor et quod itaque.</a>
                        </td>
                        <td>Ahmed Kohler</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">10/Jun/16</td>
                        <td class="uk-text-small">20/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-34</span></td>
                        <td>
                            <a href="page_issue_details.html"> Ipsum exercitationem accusamus voluptates doloremque et
                                harum.</a>
                        </td>
                        <td>Raheem Sawayn</td>
                        <td><span class="uk-badge uk-badge-danger">blocker</span></td>
                        <td class="uk-text-small">13/Jun/16</td>
                        <td class="uk-text-small">14/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-35</span></td>
                        <td>
                            <a href="page_issue_details.html"> Adipisci soluta et omnis.</a>
                        </td>
                        <td>Pearlie Klocko</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">17/Jun/16</td>
                        <td class="uk-text-small">22/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-36</span></td>
                        <td>
                            <a href="page_issue_details.html"> Voluptates totam sint tempora non enim amet magnam
                                enim.</a>
                        </td>
                        <td>Shanie Tremblay</td>
                        <td><span class="uk-badge uk-badge-warning">critical</span></td>
                        <td class="uk-text-small">21/Jun/16</td>
                        <td class="uk-text-small">24/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-37</span></td>
                        <td>
                            <a href="page_issue_details.html"> Molestiae numquam est aliquam explicabo quos cum
                                error.</a>
                        </td>
                        <td>Alexzander Ledner</td>
                        <td><span class="uk-badge uk-badge-danger">blocker</span></td>
                        <td class="uk-text-small">9/Jun/16</td>
                        <td class="uk-text-small">14/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-38</span></td>
                        <td>
                            <a href="page_issue_details.html"> Natus eligendi id temporibus reprehenderit est.</a>
                        </td>
                        <td>Jackson Reichert</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">24/Jun/16</td>
                        <td class="uk-text-small">25/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">open</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-39</span></td>
                        <td>
                            <a href="page_issue_details.html"> Ea et molestias consectetur eos.</a>
                        </td>
                        <td>Misael Marks</td>
                        <td><span class="uk-badge uk-badge-info">minor</span></td>
                        <td class="uk-text-small">16/Jun/16</td>
                        <td class="uk-text-small">16/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">open</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-40</span></td>
                        <td>
                            <a href="page_issue_details.html"> Veritatis voluptatem sunt dignissimos et
                                exercitationem.</a>
                        </td>
                        <td>Mack Kassulke</td>
                        <td><span class="uk-badge uk-badge-info">minor</span></td>
                        <td class="uk-text-small">11/Jun/16</td>
                        <td class="uk-text-small">8/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-41</span></td>
                        <td>
                            <a href="page_issue_details.html"> Voluptatum a et consequatur natus.</a>
                        </td>
                        <td>Samson Bashirian</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">23/Jun/16</td>
                        <td class="uk-text-small">21/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-42</span></td>
                        <td>
                            <a href="page_issue_details.html"> Nobis ut consequatur distinctio.</a>
                        </td>
                        <td>Donato Borer</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">18/Jun/16</td>
                        <td class="uk-text-small">15/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">open</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-43</span></td>
                        <td>
                            <a href="page_issue_details.html"> Provident est et consequatur occaecati aut.</a>
                        </td>
                        <td>Barrett Kris</td>
                        <td><span class="uk-badge uk-badge-success">major</span></td>
                        <td class="uk-text-small">24/Jun/16</td>
                        <td class="uk-text-small">13/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-44</span></td>
                        <td>
                            <a href="page_issue_details.html"> Qui distinctio cum quos a laborum.</a>
                        </td>
                        <td>Kayley Ankunding</td>
                        <td><span class="uk-badge uk-badge-danger">blocker</span></td>
                        <td class="uk-text-small">10/Jun/16</td>
                        <td class="uk-text-small">28/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-45</span></td>
                        <td>
                            <a href="page_issue_details.html"> Sapiente numquam alias hic consequatur cum optio
                                aliquid.</a>
                        </td>
                        <td>Keanu Schmidt</td>
                        <td><span class="uk-badge uk-badge-info">minor</span></td>
                        <td class="uk-text-small">21/Jun/16</td>
                        <td class="uk-text-small">21/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">closed</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-46</span></td>
                        <td>
                            <a href="page_issue_details.html"> Natus dignissimos qui et eos quo.</a>
                        </td>
                        <td>Cristobal Erdman</td>
                        <td><span class="uk-badge uk-badge-warning">critical</span></td>
                        <td class="uk-text-small">26/Jun/16</td>
                        <td class="uk-text-small">18/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-47</span></td>
                        <td>
                            <a href="page_issue_details.html"> Accusantium tempore id harum qui quod rerum
                                reprehenderit.</a>
                        </td>
                        <td>Jonatan Bechtelar</td>
                        <td><span class="uk-badge uk-badge-warning">critical</span></td>
                        <td class="uk-text-small">20/Jun/16</td>
                        <td class="uk-text-small">21/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>


                    <tr>
                        <td class="uk-text-center"><span
                                    class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-48</span></td>
                        <td>
                            <a href="page_issue_details.html"> Mollitia aut recusandae occaecati est.</a>
                        </td>
                        <td>Orrin Feil</td>
                        <td><span class="uk-badge uk-badge-warning">critical</span></td>
                        <td class="uk-text-small">17/Jun/16</td>
                        <td class="uk-text-small">19/Jun/16</td>
                        <td><span class="uk-badge uk-badge-outline uk-text-upper">reopened</span></td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <ul class="uk-pagination ts_pager">
                <li data-uk-tooltip title="Select Page">
                    <select class="ts_gotoPage ts_selectize"></select>
                </li>
                <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
                <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
                <li><span class="pagedisplay"></span></li>
                <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
                <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
                <li data-uk-tooltip title="Page Size">
                    <select class="pagesize ts_selectize">
                        <option value="5">5</option>
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="all">all</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>


@endsection

@section('javascript')
    <script src="{{asset('theme/bower_components/tablesorter/dist/js/jquery.tablesorter.js')}}"></script>
    <script src="{{asset('theme/bower_components/tablesorter/dist/js/jquery.tablesorter.widgets.js')}}"></script>
    <script src="{{asset('theme/bower_components/tablesorter/dist/js/jquery.tablesorter.js')}}"></script>
    <script src="{{asset('theme/bower_components/tablesorter/dist/js/extras/jquery.tablesorter.pager.min.js')}}"></script>
    <script src="{{asset('theme/bower_components/tablesorter/dist/js/widgets/widget-alignChar.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/pages/pages_issues.min.js')}}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".clickable-row").click(function () {
                window.location = $(this).data("href");
            });
        });
    </script>
@endsection