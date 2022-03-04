@extends('layouts.app')

@section('content')
<section class="bannerHolder">
  <section class="bannerSection">
    <section class="container">
      <section class="bannerSec">
        <section class="bannerCaptionSec">
          <h2>Recharge, Unlock, Check</h2>
          <p>All of your phone needs in one place
          </p>
        </section>
        <sectionc class="bannerImgSec"><img src="{{ asset('client/img/banner.png') }}" alt="banner"></sectionc>
      </section>
    </section>
  </section>
</section>
@include('layouts.app_partials.safteyCall')
<section class="topUpBlockContainer">
  <section class="container">
    <section class="topUpBlockSec">
      <section class="topUpBlock">
        <section class="topUpBlockContent">
          <h4>Top Up</h4>
          <p>Top up or recharge any prepaid phone in over 200 countries instantly and securely with doctorSIM. .
          </p>
          <p>
            Send money to your friends and family located anywhere in the world.
          </p>
          <p>With total transparency and no hidden costs, conveniently buy airtime 100% online using your PC or phone.</p>
          <a href="#" class="btn btn-dark btn-lg rounded btn-arrow">
            Recharge your mobile
            <i>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 4L16 12L8 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </i>
          </a>
        </section>
        <section class="topUpBlockImg">
          <img src="{{ asset('client/img/money-transfer-vector.svg') }}" alt="vector">
        </section>
      </section>
      <section class="topUpBlock">
        <section class="topUpBlockContent">
          <h4>Unlock</h4>
          <p>Thousands of unlocked phones and tablets that can be used with any network provider in any country in the world.
          </p>
          <p>Extremely fast and permanent remote service which does not void the manufacturers warranty.
          </p>
          <p>Recommended by the phone manufacturers and network providers themselves!</p>
          <a href="#" class="btn btn-dark btn-lg rounded btn-arrow">
            Unlock your phone
            <i>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 4L16 12L8 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </i>
          </a>
        </section>
        <section class="topUpBlockImg">
          <img src="{{ asset('client/img/unlock-vector.svg') }}" alt="vector">
        </section>
      </section>
      <section class="topUpBlock">
        <section class="topUpBlockContent">
          <h4>Phone Checks
          </h4>
          <p>Download a full IMEI report on the current status of your phone for FREE!</p>
          <p>
            Check to find out if the phone has been reported due to loss, theft or unpaid bill.
          </p>
          <p>Find out why you cannot make calls, if the phone is under warranty, to which network provider the iPhone is locked and if the iCloud Activation Lock is enabled.</p>
          <a href="#" class="btn btn-dark btn-lg rounded btn-arrow">
            Check your phone
            <i>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 4L16 12L8 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </i>
          </a>
        </section>
        <section class="topUpBlockImg">
          <img src="{{ asset('client/img/phone-vector.svg') }}" alt="vector">
        </section>
      </section>
      <section class="topUpBlock">
        <section class="topUpBlockContent">
          <h4>Resellers</h4>
          <p>A custom-made solution for unlocking and topup up phones at the lowest price and with discounts for large orders aimed at freelancers and resellers.</p>
          <p>
            A white-label technology solution designed to make doctorSIM services available to any user.
          </p>
          <a href="#" class="btn btn-dark btn-lg rounded btn-arrow">
            Doctorsimpro
            <i>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 4L16 12L8 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </i>
          </a>
        </section>
        <section class="topUpBlockImg">
          <img src="{{ asset('client/img/reseller.svg') }}" alt="vector">
        </section>
      </section>
    </section>
  </section>
</section>
    @include('layouts.app_partials.rating')
    @include('layouts.app_partials.testimonial')
    @include('layouts.app_partials.cta')

@endsection
