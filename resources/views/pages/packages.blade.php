@extends('layouts.app')

@section('content')


    <section class="section bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">Packages</li>
              </ul>
            </nav>
            <h1 class="heading">Packages</h1>
            <p class="lead text-center mb-4">
                       
              One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.  
            </p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row packages">
          <div class="col-lg-3">
            <div class="package ">
              <div class="package-header">
                <h5>Basic</h5>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>7</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>100GB Storage</li>
                <li><i class="fa fa-times"></i>Own config file</li>
                <li><i class="fa fa-times"></i>Sharing Tools</li>
                <li><i class="fa fa-times"></i>Auto Backup</li>
                <li><i class="fa fa-times"></i>Extended Security</li>
              </ul><a href="#" class="btn btn-outline-white-primary">Sign Up</a>
            </div>
          </div>
          <!-- end col-->
          <div class="col-lg-3">
            <div class="package ">
              <div class="package-header">
                <h5>Standard</h5>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>21</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>100GB Storage</li>
                <li><i class="fa fa-check"></i>Own config file</li>
                <li><i class="fa fa-times"></i>Sharing Tools</li>
                <li><i class="fa fa-times"></i>Auto Backup</li>
                <li><i class="fa fa-times"></i>Extended Security</li>
              </ul><a href="#" class="btn btn-outline-white-primary">Sign Up</a>
            </div>
          </div>
          <!-- end col-->
          <div class="col-lg-3">
            <div class="package best-value">
              <div class="package-header">
                <h5>Premium</h5>
                <div class="meta-text">Best Value</div>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>53</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>100GB Storage</li>
                <li><i class="fa fa-check"></i>Own config file</li>
                <li><i class="fa fa-check"></i>Sharing Tools</li>
                <li><i class="fa fa-times"></i>Auto Backup</li>
                <li><i class="fa fa-times"></i>Extended Security</li>
              </ul><a href="#" class="btn btn-outline-white-primary">Sign Up</a>
            </div>
          </div>
          <!-- end col-->
          <div class="col-lg-3">
            <div class="package ">
              <div class="package-header">
                <h5>Standard</h5>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>99</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>100GB Storage</li>
                <li><i class="fa fa-check"></i>Own config file</li>
                <li><i class="fa fa-check"></i>Sharing Tools</li>
                <li><i class="fa fa-check"></i>Auto Backup</li>
                <li><i class="fa fa-check"></i>Extended Security</li>
              </ul><a href="#" class="btn btn-outline-white-primary">Sign Up</a>
            </div>
          </div>
          <!-- end col-->
        </div>
      </div>
    </section>
@endsection