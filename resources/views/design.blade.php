@extends('templete')




@section('header')

     {{-- <link rel="stylesheet" href="css/style.css"> --}}


     <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    {{-- <style>
        
        h1{
            font-size: 80px;
            text-align: center;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

        }
        h6{
            font-size: 30px;
            text-align: center;
            margin-top: 10px;
            color: purple;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }

        span{
            color: brown
        }

        .title{
            color: yellow
        }

        .background{

            background-color: gray;
            padding-top: 60px;
            padding-bottom: 60px;
        }
    </style> --}}

    <div class="background">
        <h1><span>Company</span> <span class="title">Name</span></h1>
        <h6>Slogan of the Company Goes Here</h6>

    </div>

@endsection

@section('nav')
        
       {{-- <style>
          
          .social{
               
              text-align: center;
              margin-top: 40px;
          }

          .social a{
            margin-left: 40px
          }
          a{
            text-decoration: none;
            color: green;
            font-size: 30px
          }


       </style> --}}
 
  <div class="social">

    <a href="https://www.facebook.com/">Facebook</a>
  <a href="https://www.youtube.com/">Youtube</a>
  <a href="https://www.instagram.com/">Instagram</a>
  <a href="https://github.com/">GitHub</a>
  <a href="https://www.google.com/">Google</a>

  </div>

@endsection

@section('article')

    {{-- <style>
        p{
            padding-top: 50px;
            margin-left: 80px;
            margin-right: 80px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 20px;
            color: gray;
        }
    </style> --}}

  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nam adipisci reprehenderit minima natus voluptate aut. Sint repellendus autem saepe mollitia aliquid nostrum quaerat consectetur! Aut in sunt labore ad quia earum culpa architecto unde dolores, neque ipsam. Odio ratione eligendi soluta mollitia quia ullam earum, itaque illum id quasi provident quas iusto, optio excepturi cupiditate nostrum. Laudantium iure eligendi rerum sunt, id culpa placeat eos expedita, natus sequi nam ducimus explicabo sit voluptate repudiandae saepe ullam facere fuga magni blanditiis beatae velit aliquid vel nemo! Ipsam possimus doloremque, alias ab esse molestiae dolor mollitia? Quis officiis, debitis maiores nam ab voluptatum ut esse? Amet quis culpa corporis nisi dolore, perspiciatis debitis, dicta odit rem cum, illo iusto. Rem qui quo possimus eius nihil eveniet, vitae minima consequatur assumenda, laborum est quas atque nesciunt saepe dolorum placeat neque deserunt quaerat nemo perferendis id praesentium omnis! Quod non voluptas ut provident doloribus quidem, minima voluptatibus aliquid fugit recusandae eum modi tempora, dolorem expedita. Ad illo a nostrum quasi provident facere, aliquam libero voluptatibus nemo rerum, commodi eligendi iste, dolore temporibus odio porro accusantium ducimus molestias omnis magnam? Soluta, aspernatur sequi! Praesentium, aut perspiciatis assumenda suscipit repellat iusto alias qui adipisci hic magni autem ea explicabo eveniet, quod repudiandae molestias? Enim assumenda aperiam pariatur delectus? Doloribus voluptas veritatis, praesentium laudantium corporis exercitationem ducimus totam minus vel voluptatem similique enim eligendi a quasi? Vitae quam accusantium unde quia aliquam consequuntur? Eligendi dolor commodi rerum officia quod, culpa non, explicabo expedita quo assumenda provident reiciendis architecto sit quas, ex praesentium! Nostrum omnis ex repudiandae deleniti! Ipsam nostrum repellendus officia culpa corrupti pariatur asperiores temporibus nesciunt ab eius, sit assumenda optio commodi animi ratione esse, ullam amet cumque quis sint. Perferendis voluptatem iure omnis. Suscipit ea labore vero voluptates vitae tenetur corporis veritatis in, aliquam aperiam ad beatae dolore officia reiciendis cum pariatur impedit nihil nisi ratione odio dolorem delectus quibusdam temporibus. Doloremque illum quae earum neque vero cumque corrupti hic eaque suscipit nostrum deleniti similique dolores magnam laborum, exercitationem amet, asperiores blanditiis a? Doloremque corrupti velit possimus eos quisquam distinctio nesciunt assumenda error ipsum doloribus at, magni in provident magnam expedita porro. Commodi recusandae doloribus perferendis natus aliquid vel delectus minus eaque nobis ipsam maiores rem, eum suscipit repellat? Praesentium quia velit quasi delectus iure nemo obcaecati, atque quis sapiente optio natus nulla sunt ipsam dolores cupiditate recusandae distinctio exercitationem aliquid incidunt minima vitae. Delectus unde, explicabo asperiores quam eaque animi deleniti laboriosam dolorum ipsa, illo magnam consequatur sapiente assumenda a odit culpa aliquid? Nulla nisi hic sit laboriosam sapiente. Voluptatibus ut iure reiciendis eligendi ullam quo nobis laboriosam earum velit, culpa, porro sit facere nulla excepturi neque maiores aliquid. Veniam eligendi tenetur, optio iure dignissimos facilis ex, iusto veritatis velit temporibus laboriosam, debitis est. Illum eligendi eum voluptatibus, sint nostrum earum commodi vitae explicabo magnam ratione, recusandae itaque inventore, officiis voluptatem? Accusantium labore ducimus alias magnam ad quibusdam ab expedita quidem, dolorum soluta ullam earum totam, recusandae sequi autem numquam quia dolor inventore.</p>

@endsection

@section('ads')

  <style>
      /* .ads{
        text-align: center;
        background-color: red;
        padding-buttom: 40px
      } */
  </style>

  <div class="ads">

    <p class="p"><iframe width="1000" height="515" src="https://www.youtube.com/embed/J4i51frpCoY?si=SO23UBku1Q0RhZBL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>

  </div>

@endsection


@section('footer')

{{-- <style>
        
    h1{
        font-size: 80px;
        text-align: center;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

    }
    h6{
        font-size: 30px;
        text-align: center;
        margin-top: 10px;
        color: purple;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
    }

    span{
        color: brown
    }

    .title{
        color: yellow
    }

    .background1{

        background-color:black;
        padding-top: 30px;
        padding-bottom: 30px;
    }
</style> --}}

<div class="background1">
    <h1><span>Footer</span> <span class="title">Section</span></h1>

</div>


@endsection
