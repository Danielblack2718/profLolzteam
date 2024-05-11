<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Главная</title>
    <link rel="stylesheet" href="/assets/css/tailwind.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
  </head>
  <style></style>
  <body class="bg-bg px-5 xl:px-32 lg:px-25 md:px-15 sm:px-5 font-montserrat">
    <header
      class="max-h-14 hidden xl:flex lg:flex md:hidden sm:hidden justify-between items-center mt-3"
    >
      <div style="width: 113px"></div>
      <ul class="header__ul">
        <li>
          <a href="{{route('index')}}"
            ><svg
              width="16"
              height="17"
              viewBox="0 0 16 17"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 16.75V5.75L8 0.25L16 5.75V16.75H10V10.3333H6V16.75H0Z"
                fill="#252729"
              />
            </svg>
            <span class="nav-bar__item">Главная</span></a
          >
        </li>
        <li>
          <a href="{{route('buy')}}"
            ><svg
              width="21"
              height="15"
              viewBox="0 0 21 15"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M0 3.21429C0 2.3618 0.331874 1.54424 0.922614 0.941443C1.51335 0.338647 2.31457 0 3.15 0H17.85C18.6854 0 19.4866 0.338647 20.0774 0.941443C20.6681 1.54424 21 2.3618 21 3.21429V11.7857C21 12.6382 20.6681 13.4558 20.0774 14.0586C19.4866 14.6614 18.6854 15 17.85 15H3.15C2.31457 15 1.51335 14.6614 0.922614 14.0586C0.331874 13.4558 0 12.6382 0 11.7857V3.21429ZM9.45 7.5C9.45 7.21584 9.56062 6.94332 9.75754 6.74239C9.95445 6.54145 10.2215 6.42857 10.5 6.42857C10.7785 6.42857 11.0455 6.54145 11.2425 6.74239C11.4394 6.94332 11.55 7.21584 11.55 7.5C11.55 7.78416 11.4394 8.05668 11.2425 8.25761C11.0455 8.45855 10.7785 8.57143 10.5 8.57143C10.2215 8.57143 9.95445 8.45855 9.75754 8.25761C9.56062 8.05668 9.45 7.78416 9.45 7.5ZM10.5 4.28571C9.66457 4.28571 8.86335 4.62436 8.27261 5.22716C7.68187 5.82995 7.35 6.64752 7.35 7.5C7.35 8.35248 7.68187 9.17005 8.27261 9.77284C8.86335 10.3756 9.66457 10.7143 10.5 10.7143C11.3354 10.7143 12.1366 10.3756 12.7274 9.77284C13.3181 9.17005 13.65 8.35248 13.65 7.5C13.65 6.64752 13.3181 5.82995 12.7274 5.22716C12.1366 4.62436 11.3354 4.28571 10.5 4.28571Z"
                fill="#252729"
              />
            </svg>
            <span class="nav-bar__item">Купить робуксы</span></a
          >
        </li>
        <li>
          <a  @if(!$username)
          onclick="openModal('Purchases')"
          @else
          href="{{route('purchases')}}"
          @endif
            ><svg
              width="20"
              height="19"
              viewBox="0 0 20 19"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M4.77344 2.57193V4.11026L2.93828 4.25976C2.30781 4.3105 1.71256 4.57117 1.2477 5.00009C0.782846 5.429 0.475226 6.0014 0.374028 6.62576C0.329611 6.90526 0.287361 7.18476 0.250528 7.46534C0.241759 7.53318 0.254765 7.60206 0.287671 7.66202C0.320576 7.72199 0.37168 7.76996 0.433611 7.79901L0.517028 7.83801C6.39844 10.6222 13.4412 10.6222 19.3215 7.83801L19.4049 7.79901C19.4667 7.76979 19.5175 7.72175 19.5503 7.6618C19.583 7.60184 19.5958 7.53306 19.5869 7.46534C19.5502 7.1849 19.5094 6.90501 19.4645 6.62576C19.3633 6.0014 19.0557 5.429 18.5909 5.00009C18.126 4.57117 17.5307 4.3105 16.9003 4.25976L15.0651 4.11134V2.57301C15.0652 2.11893 14.9024 1.6799 14.6061 1.33576C14.3099 0.991613 13.9 0.765223 13.4509 0.69776L12.1293 0.49951C10.6641 0.279704 9.17441 0.279704 7.70928 0.49951L6.38761 0.69776C5.93876 0.765195 5.52899 0.991428 5.23279 1.33534C4.93658 1.67926 4.77359 2.11804 4.77344 2.57193ZM11.8877 2.10609C10.5827 1.91037 9.25584 1.91037 7.95086 2.10609L6.62919 2.30434C6.56507 2.31394 6.50652 2.34622 6.46417 2.39532C6.42183 2.44443 6.39851 2.50709 6.39844 2.57193V3.99651C8.74374 3.86216 11.0948 3.86216 13.4401 3.99651V2.57193C13.44 2.50709 13.4167 2.44443 13.3744 2.39532C13.332 2.34622 13.2735 2.31394 13.2094 2.30434L11.8877 2.10609Z"
                fill="#252729"
              />
              <path
                d="M19.7971 9.73166C19.7949 9.69663 19.7843 9.66265 19.7661 9.63264C19.7479 9.60263 19.7227 9.57749 19.6927 9.55937C19.6626 9.54125 19.6286 9.53071 19.5936 9.52864C19.5586 9.52657 19.5235 9.53304 19.4916 9.54749C13.4563 12.2201 6.38215 12.2201 0.346902 9.54749C0.314925 9.53304 0.279917 9.52657 0.244887 9.52864C0.209857 9.53071 0.175854 9.54125 0.145801 9.55937C0.115748 9.57749 0.0905455 9.60263 0.0723601 9.63264C0.0541747 9.66265 0.0435505 9.69663 0.0414016 9.73166C-0.0693131 11.8057 0.0421824 13.8856 0.373985 15.9359C0.474963 16.5605 0.782487 17.1331 1.24736 17.5622C1.71224 17.9914 2.30761 18.2522 2.93824 18.303L4.96624 18.4655C8.26282 18.732 11.5746 18.732 14.8722 18.4655L16.9002 18.303C17.5309 18.2522 18.1262 17.9914 18.5911 17.5622C19.056 17.1331 19.3635 16.5605 19.4645 15.9359C19.796 13.883 19.9087 11.803 19.7971 9.73274"
                fill="#252729"
              />
            </svg>
            <span class="nav-bar__item">Мои покупки</span></a
          >
        </li>
        <li>
          <a href="{{route('faq')}}"
            ><svg
              width="25"
              height="24"
              viewBox="0 0 25 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M12.8388 0C10.4654 0 8.14536 0.703788 6.17197 2.02236C4.19858 3.34094 2.66051 5.21508 1.75226 7.4078C0.844006 9.60051 0.606366 12.0133 1.06939 14.3411C1.53241 16.6689 2.6753 18.807 4.35353 20.4853C6.03176 22.1635 8.16995 23.3064 10.4977 23.7694C12.8255 24.2324 15.2383 23.9948 17.431 23.0865C19.6237 22.1783 21.4979 20.6402 22.8164 18.6668C24.135 16.6934 24.8388 14.3734 24.8388 12C24.8354 8.81843 23.5701 5.76814 21.3204 3.51843C19.0707 1.26872 16.0204 0.00335979 12.8388 0ZM12.8388 19.3846C12.565 19.3846 12.2973 19.3034 12.0696 19.1513C11.8419 18.9991 11.6644 18.7829 11.5596 18.5299C11.4548 18.2769 11.4274 17.9985 11.4808 17.7299C11.5342 17.4613 11.6661 17.2146 11.8597 17.0209C12.0534 16.8273 12.3001 16.6954 12.5687 16.642C12.8373 16.5886 13.1157 16.616 13.3687 16.7208C13.6217 16.8256 13.8379 17.003 13.9901 17.2307C14.1422 17.4584 14.2234 17.7261 14.2234 18C14.2234 18.3672 14.0775 18.7194 13.8179 18.9791C13.5582 19.2387 13.206 19.3846 12.8388 19.3846ZM13.7619 13.7631V13.8462C13.7619 14.091 13.6646 14.3258 13.4915 14.4989C13.3184 14.672 13.0836 14.7692 12.8388 14.7692C12.594 14.7692 12.3592 14.672 12.1861 14.4989C12.013 14.3258 11.9157 14.091 11.9157 13.8462V12.9231C11.9157 12.6783 12.013 12.4435 12.1861 12.2704C12.3592 12.0972 12.594 12 12.8388 12C14.3653 12 15.608 10.9615 15.608 9.69231C15.608 8.42308 14.3653 7.38461 12.8388 7.38461C11.3123 7.38461 10.0696 8.42308 10.0696 9.69231V10.1538C10.0696 10.3987 9.97233 10.6334 9.79922 10.8066C9.62611 10.9797 9.39132 11.0769 9.1465 11.0769C8.90169 11.0769 8.6669 10.9797 8.49379 10.8066C8.32068 10.6334 8.22343 10.3987 8.22343 10.1538V9.69231C8.22343 7.40192 10.2934 5.53846 12.8388 5.53846C15.3842 5.53846 17.4542 7.40192 17.4542 9.69231C17.4542 11.6977 15.8665 13.3765 13.7619 13.7631Z"
                fill="#FF00F5"
              />
            </svg>
            <span class="nav-bar__item active">FAQ</span></a
          >
        </li>
      </ul>
      @if($username)
      <div class="flex gap-3 items-center" onclick="window.location.href='{{route('buy')}}'">
        <img src="" alt="" class="rounded-full" /><span
          class="text-xl text-white"
          >{{ $username }}</span
        >
      </div>
      @else
      <button class="pink_button py-2" onclick="openModal('Authorization')">Авторизоваться</button>
      @endif
    </header>
    <div
      style="left: 50%; transform: translate(-50%, -50%)"
      class="lg:hidden md:flex sm:flex bottom-[15px] right-auto fixed p-3 bg-primary rounded-xl border-second border items-center justify-center w-[400px]"
    >
      <ul class="flex justify-between w-full">
        <li>
          <a href=""
            ><svg
              width="53"
              height="52"
              viewBox="0 0 16 17"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 16.75V5.75L8 0.25L16 5.75V16.75H10V10.3333H6V16.75H0Z"
                fill="#FF00F5"
              />
            </svg>
          </a>
        </li>
        <li>
          <a href=""
            ><svg
              width="57"
              height="52"
              viewBox="0 0 21 15"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M0 3.21429C0 2.3618 0.331874 1.54424 0.922614 0.941443C1.51335 0.338647 2.31457 0 3.15 0H17.85C18.6854 0 19.4866 0.338647 20.0774 0.941443C20.6681 1.54424 21 2.3618 21 3.21429V11.7857C21 12.6382 20.6681 13.4558 20.0774 14.0586C19.4866 14.6614 18.6854 15 17.85 15H3.15C2.31457 15 1.51335 14.6614 0.922614 14.0586C0.331874 13.4558 0 12.6382 0 11.7857V3.21429ZM9.45 7.5C9.45 7.21584 9.56062 6.94332 9.75754 6.74239C9.95445 6.54145 10.2215 6.42857 10.5 6.42857C10.7785 6.42857 11.0455 6.54145 11.2425 6.74239C11.4394 6.94332 11.55 7.21584 11.55 7.5C11.55 7.78416 11.4394 8.05668 11.2425 8.25761C11.0455 8.45855 10.7785 8.57143 10.5 8.57143C10.2215 8.57143 9.95445 8.45855 9.75754 8.25761C9.56062 8.05668 9.45 7.78416 9.45 7.5ZM10.5 4.28571C9.66457 4.28571 8.86335 4.62436 8.27261 5.22716C7.68187 5.82995 7.35 6.64752 7.35 7.5C7.35 8.35248 7.68187 9.17005 8.27261 9.77284C8.86335 10.3756 9.66457 10.7143 10.5 10.7143C11.3354 10.7143 12.1366 10.3756 12.7274 9.77284C13.3181 9.17005 13.65 8.35248 13.65 7.5C13.65 6.64752 13.3181 5.82995 12.7274 5.22716C12.1366 4.62436 11.3354 4.28571 10.5 4.28571Z"
                fill="#252729"
              />
            </svg>
          </a>
        </li>
        <li>
          <a href=""
            ><svg
              width="53"
              height="52"
              viewBox="0 0 20 19"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M4.77344 2.57193V4.11026L2.93828 4.25976C2.30781 4.3105 1.71256 4.57117 1.2477 5.00009C0.782846 5.429 0.475226 6.0014 0.374028 6.62576C0.329611 6.90526 0.287361 7.18476 0.250528 7.46534C0.241759 7.53318 0.254765 7.60206 0.287671 7.66202C0.320576 7.72199 0.37168 7.76996 0.433611 7.79901L0.517028 7.83801C6.39844 10.6222 13.4412 10.6222 19.3215 7.83801L19.4049 7.79901C19.4667 7.76979 19.5175 7.72175 19.5503 7.6618C19.583 7.60184 19.5958 7.53306 19.5869 7.46534C19.5502 7.1849 19.5094 6.90501 19.4645 6.62576C19.3633 6.0014 19.0557 5.429 18.5909 5.00009C18.126 4.57117 17.5307 4.3105 16.9003 4.25976L15.0651 4.11134V2.57301C15.0652 2.11893 14.9024 1.6799 14.6061 1.33576C14.3099 0.991613 13.9 0.765223 13.4509 0.69776L12.1293 0.49951C10.6641 0.279704 9.17441 0.279704 7.70928 0.49951L6.38761 0.69776C5.93876 0.765195 5.52899 0.991428 5.23279 1.33534C4.93658 1.67926 4.77359 2.11804 4.77344 2.57193ZM11.8877 2.10609C10.5827 1.91037 9.25584 1.91037 7.95086 2.10609L6.62919 2.30434C6.56507 2.31394 6.50652 2.34622 6.46417 2.39532C6.42183 2.44443 6.39851 2.50709 6.39844 2.57193V3.99651C8.74374 3.86216 11.0948 3.86216 13.4401 3.99651V2.57193C13.44 2.50709 13.4167 2.44443 13.3744 2.39532C13.332 2.34622 13.2735 2.31394 13.2094 2.30434L11.8877 2.10609Z"
                fill="#252729"
              />
              <path
                d="M19.7971 9.73166C19.7949 9.69663 19.7843 9.66265 19.7661 9.63264C19.7479 9.60263 19.7227 9.57749 19.6927 9.55937C19.6626 9.54125 19.6286 9.53071 19.5936 9.52864C19.5586 9.52657 19.5235 9.53304 19.4916 9.54749C13.4563 12.2201 6.38215 12.2201 0.346902 9.54749C0.314925 9.53304 0.279917 9.52657 0.244887 9.52864C0.209857 9.53071 0.175854 9.54125 0.145801 9.55937C0.115748 9.57749 0.0905455 9.60263 0.0723601 9.63264C0.0541747 9.66265 0.0435505 9.69663 0.0414016 9.73166C-0.0693131 11.8057 0.0421824 13.8856 0.373985 15.9359C0.474963 16.5605 0.782487 17.1331 1.24736 17.5622C1.71224 17.9914 2.30761 18.2522 2.93824 18.303L4.96624 18.4655C8.26282 18.732 11.5746 18.732 14.8722 18.4655L16.9002 18.303C17.5309 18.2522 18.1262 17.9914 18.5911 17.5622C19.056 17.1331 19.3635 16.5605 19.4645 15.9359C19.796 13.883 19.9087 11.803 19.7971 9.73274"
                fill="#252729"
              />
            </svg>
          </a>
        </li>
        <li>
          <a href=""
            ><svg
              width="53"
              height="52"
              viewBox="0 0 25 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M12.8388 0C10.4654 0 8.14536 0.703788 6.17197 2.02236C4.19858 3.34094 2.66051 5.21508 1.75226 7.4078C0.844006 9.60051 0.606366 12.0133 1.06939 14.3411C1.53241 16.6689 2.6753 18.807 4.35353 20.4853C6.03176 22.1635 8.16995 23.3064 10.4977 23.7694C12.8255 24.2324 15.2383 23.9948 17.431 23.0865C19.6237 22.1783 21.4979 20.6402 22.8164 18.6668C24.135 16.6934 24.8388 14.3734 24.8388 12C24.8354 8.81843 23.5701 5.76814 21.3204 3.51843C19.0707 1.26872 16.0204 0.00335979 12.8388 0ZM12.8388 19.3846C12.565 19.3846 12.2973 19.3034 12.0696 19.1513C11.8419 18.9991 11.6644 18.7829 11.5596 18.5299C11.4548 18.2769 11.4274 17.9985 11.4808 17.7299C11.5342 17.4613 11.6661 17.2146 11.8597 17.0209C12.0534 16.8273 12.3001 16.6954 12.5687 16.642C12.8373 16.5886 13.1157 16.616 13.3687 16.7208C13.6217 16.8256 13.8379 17.003 13.9901 17.2307C14.1422 17.4584 14.2234 17.7261 14.2234 18C14.2234 18.3672 14.0775 18.7194 13.8179 18.9791C13.5582 19.2387 13.206 19.3846 12.8388 19.3846ZM13.7619 13.7631V13.8462C13.7619 14.091 13.6646 14.3258 13.4915 14.4989C13.3184 14.672 13.0836 14.7692 12.8388 14.7692C12.594 14.7692 12.3592 14.672 12.1861 14.4989C12.013 14.3258 11.9157 14.091 11.9157 13.8462V12.9231C11.9157 12.6783 12.013 12.4435 12.1861 12.2704C12.3592 12.0972 12.594 12 12.8388 12C14.3653 12 15.608 10.9615 15.608 9.69231C15.608 8.42308 14.3653 7.38461 12.8388 7.38461C11.3123 7.38461 10.0696 8.42308 10.0696 9.69231V10.1538C10.0696 10.3987 9.97233 10.6334 9.79922 10.8066C9.62611 10.9797 9.39132 11.0769 9.1465 11.0769C8.90169 11.0769 8.6669 10.9797 8.49379 10.8066C8.32068 10.6334 8.22343 10.3987 8.22343 10.1538V9.69231C8.22343 7.40192 10.2934 5.53846 12.8388 5.53846C15.3842 5.53846 17.4542 7.40192 17.4542 9.69231C17.4542 11.6977 15.8665 13.3765 13.7619 13.7631Z"
                fill="#252729"
              />
            </svg>
          </a>
        </li>
      </ul>
    </div>
    <main class="flex justify-center mt-14">
      <div class="max-w-[1250px] flex flex-col justify-center items-center">
        <h1 class="text-white font-bold text-5xl">FAQ</h1>
        <span
          class="text-gray font-medium text-xl max-w-[650px] text-center mt-7"
          >Мы ответим на все ваши вопросы. Здесь собраны ответы на все
          популярные вопросы от наших пользователей</span
        >
        <div class="flex gap-16 mt-5">
          <div class="flex flex-col">
            <img
              src="/assets/img/howCreateGamepass.png"
              class="rounded-xl max-w-[585px] w-full"
              alt=""
            />
            <span class="text-white font-semibold text-xl mt-2">
              Как купить робуксы на
              <span class="text-pink">rbxmarket.com</span> на компьютере
            </span>
          </div>
          <div class="flex flex-col">
            <img
              src="/assets/img/howCreateGamepassTel.png"
              class="rounded-xl max-w-[585px] w-full"
              alt=""
            />
            <span class="text-white font-semibold text-xl mt-2">
              Как купить робуксы на rbxmarket.com на телефоне
            </span>
          </div>
        </div>
        <div class="questions">
          <div class="question">
            <div class="question__body">
              <div class="question__header">
                <span class="text-pink-light font-bold text-xl"
                  >Когда придут робуксы?</span
                >
                <img
                  src="/assets/img/svgGalka.png"
                  class="max-w-[17px] max-h-[15px]"
                  alt=""
                />
              </div>
              <div class="description border-t-2 border-bg">
                <span class="text-pink-light text-base font-medium"
                  >Если робуксы в наличии на момент покупки, валюта доставляется
                  на ваш аккаунт моментально. В самом роблоксе Pending Robux
                  займет 5-7 дней. Посмотреть можно по ссылке:</span
                >
              </div>
            </div>
          </div>
          <div class="question">
            <div class="question__body">
              <div class="question__header">
                <span class="text-pink-light font-bold text-xl"
                  >Когда придут робуксы?</span
                >
                <img
                  src="/assets/img/svgGalka.png"
                  class="max-w-[17px] max-h-[15px]"
                  alt=""
                />
              </div>
              <div class="description border-t-2 border-bg">
                <span class="text-pink-light text-base font-medium"
                  >Если робуксы в наличии на момент покупки, валюта доставляется
                  на ваш аккаунт моментально. В самом роблоксе Pending Robux
                  займет 5-7 дней. Посмотреть можно по ссылке:</span
                >
              </div>
            </div>
          </div>
          <div class="question">
            <div class="question__body">
              <div class="question__header">
                <span class="text-pink-light font-bold text-xl"
                  >Когда придут робуксы?</span
                >
                <img
                  src="/assets/img/svgGalka.png"
                  class="max-w-[17px] max-h-[15px]"
                  alt=""
                />
              </div>
              <div class="description border-t-2 border-bg">
                <span class="text-pink-light text-base font-medium"
                  >Если робуксы в наличии на момент покупки, валюта доставляется
                  на ваш аккаунт моментально. В самом роблоксе Pending Robux
                  займет 5-7 дней. Посмотреть можно по ссылке:</span
                >
              </div>
            </div>
          </div>
          <div class="question">
            <div class="question__body">
              <div class="question__header">
                <span class="text-pink-light font-bold text-xl"
                  >Когда придут робуксы?</span
                >
                <img
                  src="/assets/img/svgGalka.png"
                  class="max-w-[17px] max-h-[15px]"
                  alt=""
                />
              </div>
              <div class="description border-t-2 border-bg">
                <span class="text-pink-light text-base font-medium"
                  >Если робуксы в наличии на момент покупки, валюта доставляется
                  на ваш аккаунт моментально. В самом роблоксе Pending Robux
                  займет 5-7 дней. Посмотреть можно по ссылке:</span
                >
              </div>
            </div>
          </div>
          <div class="question">
            <div class="question__body">
              <div class="question__header">
                <span class="text-pink-light font-bold text-xl"
                  >Когда придут робуксы?</span
                >
                <img
                  src="/assets/img/svgGalka.png"
                  class="max-w-[17px] max-h-[15px]"
                  alt=""
                />
              </div>
              <div class="description border-t-2 border-bg">
                <span class="text-pink-light text-base font-medium"
                  >Если робуксы в наличии на момент покупки, валюта доставляется
                  на ваш аккаунт моментально. В самом роблоксе Pending Robux
                  займет 5-7 дней. Посмотреть можно по ссылке:</span
                >
              </div>
            </div>
          </div>
          <div class="question">
            <div class="question__body">
              <div class="question__header">
                <span class="text-pink-light font-bold text-xl"
                  >Когда придут робуксы?</span
                >
                <img
                  src="/assets/img/svgGalka.png"
                  class="max-w-[17px] max-h-[15px]"
                  alt=""
                />
              </div>
              <div class="description border-t-2 border-bg">
                <span class="text-pink-light text-base font-medium"
                  >Если робуксы в наличии на момент покупки, валюта доставляется
                  на ваш аккаунт моментально. В самом роблоксе Pending Robux
                  займет 5-7 дней. Посмотреть можно по ссылке:</span
                >
              </div>
            </div>
          </div>
        </div>
        <style>
          .description {
            max-height: 0;
            overflow: hidden;
            padding: 0;
            transition: max-height 0.5s cubic-bezier(1, 0, 0, 1),
              padding 0.5s ease; /* Adjust the duration and easing for a smoother transition */
          }
          .description.show {
            max-height: 1000px;
            padding: 24px; /* Change to the actual maximum height of the description content */
          }
        </style>

        <script>
          const questions = document.querySelectorAll(".question");
          questions.forEach((question) => {
            question.addEventListener("click", () => {
                question.querySelector(".question__header").classList.toggle("active")
              const description = question.querySelector(".description");

              if (description.classList.contains("show")) {

                description.style.maxHeight = null;
                description.classList.remove("show");
              } else {
                description.classList.add("show");
              }
            });
          });
        </script>
      </div>
    </main>
    <footer class="flex flex-col mb-[114px] mt-[110px]">
      <div class="flex flex-wrap justify-around gap-4">
        <div class="flex flex-col">
          <img src="/assets/img/logo.png" class="max-w-[137px] mb-1" alt="" />
          <span class="font-medium text-2xl text-gray max-w-[300px] mb-4"
            >Покупай робуксы дешевле, чем где-либо!</span
          >
          <div class="flex gap-3 items-center">
            <svg
              width="28"
              height="21"
              viewBox="0 0 28 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
            >
              <rect width="28" height="21" fill="url(#pattern0_11_28)" />
              <defs>
                <pattern
                  id="pattern0_11_28"
                  patternContentUnits="objectBoundingBox"
                  width="1"
                  height="1"
                >
                  <use
                    xlink:href="#image0_11_28"
                    transform="matrix(0.00161551 0 0 0.00215401 0 -0.00619278)"
                  />
                </pattern>
                <image
                  id="image0_11_28"
                  width="619"
                  height="470"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAmsAAAHWCAYAAAAo8M7SAAAACXBIWXMAADXUAAA11AFeZeUIAAAFyWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgOS4wLWMwMDAgNzkuMTcxYzI3ZiwgMjAyMi8wOC8xNi0xODowMjo0MyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDI0LjAgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMy0xMi0yNVQxNzoxOTowOCswMjowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTItMjVUMTc6MTk6MzIrMDI6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjMtMTItMjVUMTc6MTk6MzIrMDI6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOmQ3ZWNlZDcwLTg2NzAtZTk0ZS1iYTUzLWFhMDQ2ODk0ZTIzNSIgeG1wTU06RG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOmY3ZjlmMThjLWJlZWUtNTk0NS1hYWM5LWNiZDJmNzFlOWU3NSIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOjNkMTdlZDhkLWQ0NDEtODM0NS05MTVkLTRjMWQ0ODIxYzE2NCI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNyZWF0ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6M2QxN2VkOGQtZDQ0MS04MzQ1LTkxNWQtNGMxZDQ4MjFjMTY0IiBzdEV2dDp3aGVuPSIyMDIzLTEyLTI1VDE3OjE5OjA4KzAyOjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjQuMCAoV2luZG93cykiLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOmQ3ZWNlZDcwLTg2NzAtZTk0ZS1iYTUzLWFhMDQ2ODk0ZTIzNSIgc3RFdnQ6d2hlbj0iMjAyMy0xMi0yNVQxNzoxOTozMiswMjowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIDI0LjAgKFdpbmRvd3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDwvcmRmOlNlcT4gPC94bXBNTTpIaXN0b3J5PiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiDTWKcAACrDSURBVHic7d3bddvW9vbhNxn/e2NXIKQCIxUEqcBIBYYrCFNB6Aq2XMGmKthyBaEq2FQFoSr4yItc57uYYkjRPIA4zbWwfs8YGpYlipy2SOLFXAd897f+EoBR5ZIySSvXKoDb5eK5C4zuO8IaMJhMUvH6kb/++dPr97avf1+PXBPQViYLaXevf3+WPX9Xkpavn69HrglIAmEN6EeufTDbfdydu/GrB0n1YBUB/ZpL+v3Kbbay8Hb8AaADwhpwu1z7QFa+/vmu5X39KA5mCF8m65q1fZ4/iQAHtEZYAy7LtA9lpboFs1OeXu8XCNlC0see73MX4Javf657vn9gMghrwFuF9qGs1PWhzD78LDtgASHKJf05wuNstQ9uS/GaAP5BWEPKMr3tmv10/qaDepEdEIEQLdR/V62pZ70NcGunOgBXhDWkJNfbcPber5RvfJIdFIGQlJL+8C7iwIvehreVXynAeAhrmLJc+2BWapwhzbboriFES/l1nJvYDZ3uPlZ+pQDDIaxhSnLFE85O+U3SvXcRwKtSYXXVmiC8YZIIa4hZprfhLKRhzTa2ssC58S0DkBR+V62JraRH7cPb2q8UoD3CGmJTyn9BwJA+yzYfBTyViq+r1sSL3oa3jV8pQHOENYQulx04qtc/+9zjLER01xCCpaZ5MnTsSfvwtvIsBLiEsIYQldqHs9iHNtuguwZPpabZVbvmcMj0UZwwISCENYQgk4WzSml0z66huwZPS6XRVbuGrhuCQViDl0IWzGql2T27hu4aPJRKs6t2zeFct0fPQpAmwhrGVGrfQYttW42x0V2Dh6Xoql3DcClGR1jD0KqDj9SHN29Fdw1jKkVXrY2vstD2KIIbBkJYQ98yve2gEdDao7uGMS1FV62r3Ty3R7GnG3pEWEMfMu3D2QfPQiaI7hrGUIquWt+eZdf7fRTBDR0R1tBWJgLaGOiuYQxL0VUbEsENnRDWcKtKDHGOje4ahlSKrtqYnmXXAH4UJ2FoiLCGJioR0DzRXcOQFpI+eheRKBYnoBHCGs4pZHugVWKbjRD8JjsbB/qUS/rTuwhIkh60D27AG4Q1HMpl4WwmAlpoXmS/H6BPC9FVC81W9ntZiCsn4BVhDZlYKBCLT7I3cKAPueiqhe5F+/lta89C4Iuwlq5S+2FO5qHFge4a+jSX9Lt3EWhsN79t4VsGPBDW0pKLYc7Y/SLmtKC7TNap4UQtPrvLXd2LYdJkENbSUMm6aAxzxu9J1hWdsky2wKXrz63UboXdssXPxGYm6d/eRaCz3f5tC7GadNIIa9OVywJaLbpoU/OzwgsUmd4GpVxvh2yP/777WkzPzWd9e0BcHX1trbdzi5bDldPJWnH93+O6B1loW/qWgSEQ1qanEl20qXuQ/Y6HVr7+mWkfxHLtQ1cuDvi3OAx7a+1D3erg68sR6qgl/WeEx4GP3aKEhei2TQZhbRpy0UVLzQ9qvzos0z58la9/Fq9fz8VzKAQvst/vRvt5ScvXP1fqdhBeiktLpYJu20QQ1uJWyuae0EVLzxfZ7/6cUvtQdvjn+wFrwrh2ge74Y6XzYa6Q9L9Bq0KIuMRV5Ahr8clkHbSZ6ICkbCsb8s5fPwrZc4OOCXZ2w65L7Tt0M3Fyl7Ldhrv3Yt+2qBDW4pHL9kWqxHJ7AEA3T9p32xA4wlr4KtnZMB0TAEDfWJAQAcJamDIx1AkAGA9DpAEjrIUllwW0Wgx1AgB8fJWFtqVvGdghrIWhlAW0j75lAADwj90q0oVvGSCs+arEfDQAQNiY1+aMsObnXtKv3kUAANDQV1mTASMjrPkoJf3hXQQAADf6TdZswIgIa+PLZJtTssoTABCbrWwT7rVvGWn53ruABM1FUAMAxOmdWHAwOsLauEoxTw0AELefdPnaxOgZw6DjycTwJwBgGhgOHRGdtfHMRVADAEwDw6EjIqyNoxTDnwCAaWE4dCQMg45jJem9dxEAAPSM4dAR0Fkb3lwENQDANDEcOgI6a8MqJP3PuwgAAAbGZrkDIqwNayW6agCA6dtKysW1QwfBMOhw5iKoAQDSwHDogOisDSOXddXe+ZYBAMCofpH06F3E1BDWhrGULWkGACAlDIcOgGHQ/tUiqAEA0vROLDToHZ21fmWyvWYY/gQApOxn2SgTekBnrV8LEdQAAFjIGhjoAWGtP6WkD95FAAAQgDtxKareMAzaj0y2+pMLtQMAsPej7PiIDuis9WMmghoAAMfuvQuYAjpr3eWS/vQuAgCAQHEpqo4Ia90txVYdAACcw95rHTEM2k0tghoAAJdwKaqO6Ky1l4k91QAAaIq911qis9beXAQ1AACaWngXECvCWjulpF+9iwAAICJ3skYHbsQwaDsrSe+9iwAAIEI/yKYRoSE6a7ebiaAGAEBbC+8CYkNn7TaZWFQAAEBXv0h69C4iFnTWbnMvghoAAF3diwu9N0ZYa66U9NG7CAAAJoALvd+AYdDmlmIDXAAA+sRigwborDVTi6AGAEDfFt4FxIDO2nWZWFQAAMBQuLLBFXTWrpuLoAYAwFAW3gWEjrB2WS6uVAAAwJC4ssEVDINethRz1QAAGNpWUiEWG5xEZ+28UgQ1AADG8E50186is3beWtaaBQAA42CxwQl01k6biaAGAMDY5t4FhIjO2rcysVUHAABePokVom/QWfvWXAQ1AAC8zMV1Q98grL2Vi606AADwxHVDjzAM+tZSrAAFAMAbW3kcoLO2V4qgBgBACNjK4wCdtb2VpPfeRQAAgH/8KDs+J43OmqlFUAMAIDT33gWEgM6aWYt91QAACFHyG+XSWbMxcYIaAABhWngX4C31sJaJ5cEAAITsTjZdKVmph7WZ2AAXAIDQzZXwRrkph7Vc0u/eRQAAgKuS3ig35bA29y4AAAA0NlOi3bVUw1ou6aN3EQAAoLF3SrS7lurWHUtxtQIAAGL0gxK7DFWKnbVSBDUAAGI19y5gbCl21pYirAEAELOkumupddZKEdQAAIjd3LuAMaXWWVuJa4ACADAFyVyGKqXOWi2CGgAAUzH3LmAsKXXW1uIaoAAATEkS3bVUOmu1CGoAAEzN3LuAMaTSWVuLsAYAwBRNvruWQmetFkENAICpmnsXMLQUOmtrEdYAAJiySXfXpt5Zq0VQAwBg6ubeBQxp6p21tQhrAACkYLLdtSl31moR1AAASMXcu4ChTLmzthZhDQCAlEyyuzbVzlotghoAAKmZexcwhKl21tYirAEAkKLJddem2FmrRVADACBVc+8C+jbFztpahDUAAFI2qe7a1DprtQhqAACkbu5dQJ+m1llbi7AGAAAm1F2bUmetFkENAACYuXcBfZlaWAMAAJCknyQV3kX0YSphrZT9UgAAAHZm3gX0YSpz1pYirAEAgG/9IJvTHq0pdNZKEdQAAMBpc+8CuppCZ+1R0gfvIgAAQLCi7q7F3lnLRVADAACX1d4FdBF7WJt7FwAAAII3k5Q519BazGEtl/TRuwgAABC8d4p4ZWjMYa32LgAAAESj9i6grVjDWqaIEzIAABjdnSINbLGGtVrW0gQAAGhq7l1AG7Fu3bEW1wEFAAC3i+4C7zF21moR1AAAQDtz7wJuFWtYAwAAaOMn2Y4S0YgtrJXi0lIAAKCbuXcBt4gtrNXeBQAAgOh9VESb5MYU1nKxCS4AAOjHzLuApmIKazPvAgAAwGTMvAtoKpawlokhUAAA0J93iiRbxBLWKrEJLgAA6NfMu4AmYtkUdy32VgMAAP0LfpPcGDprpQhqAABgGLV3AdfE0Fl7lPTBuwgAADBZP8hG8YIUemctF0ENAAAMq/Yu4JLQw9rMuwAAADB5tXcBl4Qe1mrvAgAAwOTdKeDMEXJYq8V2HQAAYBy1dwHnhLzAYCXpvXcRAAAgGUEuNAi1s1aIoAYAAMY18y7glFDD2sy7AAAAkJzau4BTQgxrmezyUgAAAGMK8nqhIYa1SiwsAAAAPmrvAo6FuMBgJearAQAAP0EtNAits1aIoAYAAHzNvAs4FFpYm3kXAAAAkld7F3AopLCWiYUFAADAX1ALDUIKa5VYWAAAAMJQexewE1JYq70LAAAAePWTpNy7CCmcsJbL/lMAAABCUXsXIIUT1mbeBQAAABypvQuQwglrlXcBAAAAR+4UQEYJIaxVsv8MAACA0FTeBYRwBYNHSR+8iwAAADjjX5I2Xg/u3VnLRFADAABhqzwf3DusVc6PDwAAcM3M88G9h0FX4lqgAAAgfG4Xd/fsrOUiqAEAgDjUXg/sGdZmjo8NAABwi9rrgT3DWuX42AAAALe4k1R4PLBXWCvE3moAACAuM48H9QprM6fHBQAAaKvyeFCvsFY5PS4AAEBb7+SQYTzCWiX7xwIAAMSmGvsBvcIaAABAjCrZFZhGM3ZYy0RYAwAA8Rp9KHTssFaJIVAAABC3aswH8whrAAAAMfugEYdCxwxrmewfBwAAELtqrAcaM6xVIz4WAADAkKqxHoiwBgAAcLvRhkLHCmuZGAIFAADTUo3xIGOFtWqkxwEAABhLNcaDENYAAADaGWUodIywlokhUAAAME3V0A8wRlirRngMAAAAD9XQD0BYAwAAaG/w0cMxwhpDoAAAYMqqIe986LBWDXz/AAAA3qoh75ywBgAA0E015J0T1gAAALp5pwEzz5BhrZQVDwAAMHXlUHc8ZFirBrxvAACAkFRD3TFhDQAAoLs7ScUQdzxUWCtkRQMAAKSiGuJOhwpr5UD3CwAAEKpqiDv97m/9NcT9riS9H+KOAQAAAvYvSZs+73CIzlomghoAAEhT1fcdDhHWqgHuEwAAIAZV33c4RFgrB7hPAACAGJR93+EQc9Y2YjNcTMeLpLXseb26cttCNg0gF6uhka6t9q+V5ZXb5q8fmZg+g2n5Wdef/439X1939KoUQQ3xepIdZJaygLbqeH+F7EBUvn7+U8f7A0LzInu9rLR/7XSR6+1rphTHFMSpUo9hre/O2r2kX/u8Q2BAL5IeZS+ox5Ees5IdgCrRfUN8ttq/Xpayk5qhFbLXTC26b4jHs3rcILfvsLYSLyaEbSs70Nyre+esq0J2AKpF9wBh+yppofFOas7JZSc6tTjWIHw/qKcTmj7DWibp//V1Z0DPnmUBbeFbxln16wdDpQjFVvvXzNqzkDMKSTNJH33LAM76pJ6OOX2uBq16vC+gL0+yiZ6Fwg1qktVWymp9cq0EqXuRHWQySXOFGdQk64zXsu7FZ1m4BEJS9XVHfYa1ssf7ArrahbRSPU7yHMFShDb42IW0XGGf2Bxby0JlLumLZyHAkbKvO+pzGHQj5t3A34tsaOTRt4zelLIDJ4sRMKTPsiHPjW8Zvchl/5YPvmUAkqQf1cP86L46a4UIavD3RfZcfPQto1dL2cGHYR4M4Uk2jDjXNIKaZJ22StadfnGtBOhpKLSvsFb2dD9AGy+ys5eZpnPAOTaXBdFn3zIwEVtJv8neu9eulQxnKXvNMDQKT2Ufd9LXMOhSrGKDjwdNO6SdMpf0u3cRiNaz7Gx/7VvGqCrZdAJGgODhu8530FNY+7uPOwFusJWFtIVvGW5K2XAvBx/c4kG2gjJFmayxwP5sGNsv6jg9p49h0LKH+wBu8aL9xPtULWVz2RgWRVOflG5Qk6z7XsgCKzCmsusdENYQm90lPFa+ZQRhI3v9cfDBJVvZnM6Fcx2hqGXBFRhL2fUOCGuIyZPs+bbxLSMoG9nBh8CGU7ay18zKt4zgLERgw3jey4bhW+sa1jKxsADjeBBB7ZJaBDa8tZsusPItI1gLWceRLXEwhrLLD3cNa50eHGgo5UnRt6hFYIN5EdMFmljJjmMENgyt7PLDhDWE7qsIareoRWBL3Va2VcXGt4xorMSxDMMru/wwYQ0hexZBrY1aBLZUMUetnZWYw4ZhdZq31iWsZWK/GgznWcxR66KWdSWRlkoEtbYWIrBhWGXbH+wS1ooOPwtcspWFjY1vGdGrxT5sKfkk238P7S1EVxrDKdv+YJew1vpBgStq0R3ow0bWaWHy9PQ9iH3U+lLLtgkC+la2/UHCGkLzWR0vy4E31mLe39Qxt7N/lTjJQf9az1vrEtbYXw19e5ZdpBz9epT0xbsIDGK38hP92oj/VwyjbPNDbcNaqwcDLuCgM6yZmL82RXNZ9xT9W4qTHPSvaPNDhDWEYi4OOkOrvQtAr54k3XsXMXEzcZKDfpVtfqhtWCta/hxwCgedcaxkcwIRv92KaQxv5l0AJqXVFDI6awhB7V1AQuaySxEhbnPRiR7LUgyHol/lrT/QJqwVkt61+DnglM/ioDO22rsAdPIsOtFjm4vVoehPcesPtA1rQB+24qDjYSn2kYrZzLuABG3ESnX0p7z1B9qEtZsfBDhjJq5S4KX2LgCtPImrFHi5F1MI0I/i1h+gswYvL2LHdU9rcVmdGM29C0jc3LsATMKdpPyWH7g1rGXi4u3ox9y7APA7iAxdNX8L0V1DP4pbbnxrWLvpzoEz6KqFYS26azGZexcASfwe0I/ylhvfGtZuunPgjHvvAvCPe+8C0AhdtXAsRHcN3RW33JjOGsa2FV21kKzEytAY3HsXgDfuvQtA9G7aHJfOGsb2KFaAhmbhXQAuepG9bhCOhXcBmISi6Q1vCWu52AwX3d17F4BvLMSGnyFbeBeAb2zEfE90VzS94S1hrfGdAmc8y4bdEJ6FdwE4a+FdAE569C4A0Sua3pCwhjEtvAvAWQvvAnDSV3E5tlA9ioUG6KZsesNbwlrjOwXOePQuAGetxIEnRI/eBeCiR+8CELXG+9bSWcNYnkWHIHSP3gXgG4/eBeCihXcBiF7Z5EZNw1ouFhegm4V3Abhq4V0A3ngSK6dDtxKLc9BN3uRGTcNa0boMwDx6F4CrVuLAE5JH7wLQyKN3AYha0eRGhDWM4UUMgcZi6V0A/rH0LgCNLL0LQNSKJjdqGtbK1mUAvJnFZOldACRZh3PlXQQaWXoXgKg1upLBLXPWgLaW3gWgsaV3AZDE7yEma7GSGt0U127QJKxlku66VoKkrbwLQGMr7wIgibAWm5V3AYhafu0GTcJa0bkMpIzhnPhwYXd/K+8CcJOVdwGIWnHtBk3CWtm5DKRs5V0AbrbyLgB01iKz9C4AUSuv3aBJWMs7l4GUrbwLwM3W3gUkjvlP8Vl5F4Co5dduQFjD0NbeBeBmK+8CErf2LgA323gXgKjdydYHnNUkrDVaVgqcsfIuADdbeReQuKV3AWiFuZ7oorj0zWth7eIPAw2svQvAzTbeBSRu410AgNEVl755LazlvZWBVK29C0ArzJvys/IuAK0svQtA1PJL36SzhiFxwI/X2rsAAEhIcembhDUMae1dABChlXcBaGXjXQCiVlz6JsOgAE7ZeBeQsI13AWhl5V0AovZOF1aEXgtr73stBUAsVt4FAEBiinPfuBTWzv4Q0NDSuwAAACJRnPvGpbCW9V4GAOASFuUA6crPfeNSWCt7LwMAcMnauwAAbopz37gU1vLeywAAAMAp+blvENYAAAD83Z37BgsMACAcXIsZSFt56ovnwlom2/MD6KLwLgCtZd4FAECCslNfPBfWisHKQEoy7wLQWuFdABCZ3LsATEJx6ovnwlo+WBkAAExP7l0AJiE/9UXCGoaUeRcARKjwLgCAm/zUFxkGxZC4XFm8mOjuJ/MuAK3k3gVgEopTX7y0wAAAML7cuwC0knsXgEk4ubiTzhqGVnoXgJsV3gUkLvcuAK3k3gVgMsrjL5wLa2zbgb5k3gXgZpl3AYnLvQtAK2c3NAVulB1/4VRYKwcvAykpvAvAzUrvAhKXexeAmxXeBWBSiuMvXLqCAdCHwrsA3Cz3LiBxLO6IT+5dACYlO/4CnTUMrfAuADcrvAsAv4PIFN4FYFKK4y/QWcPQ7sQcqNiw5Yq/wrsA3KT0LgCTkh1/gc4axlB6F4DGSu8CIInfQ2wK7wIwKd+cMNNZwxhK7wLQWOldACTxe4hJIXZQQP+yw7+cCmtMbkXfSu8C0FjpXQAk2fSB3LsINFJ6F4BJKg7/QmcNY3gv5q3FgpO1cJTeBaCR0rsATN9xWCs9ikASKu8CcFXlXQDeqLwLQCMfvAvAJJWHf6GzhrFU3gXgqsq7ALxReheAqyrvApCG47BWeBSBJHwQQ6Ghq7wLwBvvxO8kdJV3AZis8vAvx2EtG60MpKjyLgBnVWJFW4gq7wJwUeVdANJwHNZyjyKQjMq7AJxVeReAkypxEh2qSpzgYDj54V8IaxjTB/EcC1EmwlqoGAoNV+1dACbt7vAvLDDA2GrvAvCNSnQIQjbzLgDfyMUqUAwv231yHNbYYwlDq70LwDdm3gXgovdi8Vdoau8CkIRi9wmdNYztTrzRhaQUF26Pwcy7ALxRexeAtByGtdyrCCSn9i4A/6i9C0AjH8V7dChqHc0nAgZS7D4hrMHDT2LDzxDkshCAOMy9C4Akfg8YT7b7hGFQeJl7FwB+B5Ghu+avFl01ODgMa4VXEUgS3TVfueiqxWjuXUDi5t4FICnl7pPDsJaNXgZSt/AuIGEL7wLQCt01P7XoqsEJw6DwdCdWuXkoxTY9MVt4F5CgTNK9cw1IT7b75DCslaOXAdiwQuZcQ2ruvQtAJz+JqxqMbSY2jsb4/tlWic4avL0T4WFMc7Gv2hTci5OcsRSSfvcuAmkjrCEEH0Vndwy5GHaeijsx2X0sC+8CkLRMehvWmMMCTwvRKRjaQgzlTMmv4iRnaHPRiYavQqKzhnDcieHQIc3ECdkULcRJzlAKMfyJQBDWEJKP4vJHQygk/du7CAziTgzTDSET/68IyC6s5Z5FAAfuxQbNfcokPTrXgGF9EHMR+3Yvhj8RhlIirCE878TQTp8WYiPPFPxbnOT0pRZX90BgGAZFiN6LblAf7mVdF6RhKU68uyol/ce7COAYYQ2h+knMGemilq0WRDreyU5yMt8yolWIk0SEJ5f2Ya10KwM476NYIdpGLboDqXov67BlvmVEJ5P9v7G1DUKTS3TWEL5fxQrRW5QiqKWOwHabTAQ1BI6whhj8RwS2JgoxjANDYGsmk/0/sfITQSOsIRb/EZfXuaSW9D/RHcAege2yXAQ1hC+XpO/+1l+SPWHZ3RwxeBBdtmO1GPrEec+y4fGNbxlBKcTQJ+LxHZ01xOajWPF2aC6CGi57L2kl9mHbKUVQQ2QIa4jRB9mbbeFbhqtMFlq5diGauJO9ZmrfMtzNJP0hghoiQ1hDrHbzcSrfMlwUsn87G97iFu9kXdh75zo8ZLKTG66RiyjtwlrmWQTQ0jtJ/1Val6eayRYSMCkabf2qtIZFS9m/l5MbxKrchTXe+BGzj7I349K3jEHlsm4anQH0YdeZnvmWMahM1kX8Q1wfF5FjGBRTcSd7U15oel22uSyMsmIbfXonC/8rTe9Ep5T9u7jkGiaBsIap+ShprWnsyVbJ/i2/iwnRGM577U90ctdKustlHUO6aZgUwhqm6J0s4KwV5+q3UnbA+a844GA8HyX9KTvRyVwruV0uC5t/ig40Jmi3Ke7f3oUAA3qRzV1ZKOyNQWvZHCLmkCIED7LgtvYt46JS9rr56FsGMKjfvvtbf+WysxFg6ray5fv3svksIchlB5tadNEQpifZic7Ct4x/ZLIpAjNxYoM0fP7ub/1Vysb3gZS8yILbQuMHt1x2sKnFwQbx2J3s7D7GlMleM5XYggPpIawBsuC2PPhY93z/uWxPq1J2sKGDhtht9fY1sxrgMcqDD+ahIWWENeCErezgs5LNcVu+fn2t80Eu134lXSHrBJSvn7OSEyl40v41spK9djY6H+Qy7TfmzbU/qclFxxk4RFgDAAAI2Ge27gAAAAgYYQ0AACBcGWENAAAgXAVhDQAAIGDfa78aBwAAAIH5XvFdAw4AACAZDIMCAAAEjLAGAAAQMMIaAABAwAhrAAAAASOsAQAABIywBgAAEDDCGgAAQMAIawAAAAEjrAEAAASMsAYAABAwwhoAAEDACGsAAAABI6wBAAAEjLAGAAAQMMIaAABAwAhrAAAAASOsAQAABIywBgAAEDDCGgAAQMAIawAAAAEjrAEAAATse0lL7yIAAABwGp01AACAgBHWAAAAAkZYAwAACNeKsAYAABCuDWENAAAgYIQ1AACAgBHWAAAAAva9pI13EQAAADjte0kr7yIAAABwGsOgAAAAASOsAQAAhGtJWAMAAAgYYQ0AACBgu7C2da0CAAAAJ+3C2sqzCAAAAJzGMCgAAEC41oQ1AACAcBHWAAAAQrYLaxvPIgAAAHAaCwwAAAACxjAoAABAmJ4kwhoAAEDQmLMGAAAQMOasAQAABIxhUAAAgDCtJMIaAABAqDYSc9YAAACCxpw1AACAMG0khkEBAABCtZIIawAAAEE7DGtPblUAAADgJDprGNpW0m/iZADA9GwlfZb01bsQTNZKIqxhWM+Sckn3kkpJP0t68CsHAHrxIumTpEzSXFIl6YtfOZiwjfQ2rK1cysBUPUgq9HZbmKWkWtIPsje27cg1AUAXT5J+kZ2ELo6+N5MFON7X0LvDsLbxKgKT80kWys5Zy97YctkQ6cvQBQFABw+SfpSNEDxeuN3i9TbPQxeEJPzzPGIYFH16kb2hLRrefiMbIs1lZ6vMawMQihfZfLR/yU4+Vw1/biULbMxjQ1eb3ScMg6IvT7Jhz1XLn3+UvcH9IDuLZSgBgIcn2ehALpuPtmlxHxvZPLbP/ZSE1DEMij58lgWtTQ/3tZadxeayN0yGEwAMbau3Q52Lnu53LltYxckn2ljtPmEYFF1sZW9E8wHueyN7wyxkb6CsIgXQtxfZvNlctw113mL5ev9M88CtNrtPDsPacvQyELMn2RvQcoTHWsneSP8le2Ol2wagiwfZiWYumze7GfjxNrKOHcOiaOW7v/XX4d//9ioEUfmsYbpptyhkK0orSe88CwEQhWdZt34h32k/pWyOLu9buOZnvTZEjodBGVfHNaE8R1Z6O7eNIQYAxw7nohUap4vWxMa7AMTluLNWyM463nsUg6i8yDpbj75lvJHLAlwt6c6zEACuvsremxa+ZbyRy8LiB98yEIGt7Pi62H3hOKxJdvmMe0kfx6kJkXuSPalWvmV8oxDDpEBKXmTHrkfZqvJQZLL3ot99y0AknnViscupsLZTyVIdBzo08SB7Q9r4lnFSJXvyc0YLTMuL9h20lWchZ8xk83s5jqKJL7LnzDcuhTVpf/2zn/quCJO0lZ3Z3ivM0JbJglslghsQq60soO0+QlTKjp1Mx0ATW9lxaXnuBtfC2s5ctHDR3IvsObPwLeOiTAQ3IBYxBDTJQtpcNDjQ3FfZyM/m0o2ahjWJxQe4XYiLEE7JRHADQhNLQJP2l6Zirjea2sqeM/dNbnxLWJPsoDaX9OttNSFxT7LnzdK3jEYyEdwALzEFNImQhnZOLiK45NawtlOJxQe4XUyhbac6+OD5DvRvt0jgUfG8N2RihSfaabWpfNuwJtmTdSG6D7jdk+ysYu1bxs0KWd2lmA4AdLG7msBSYa7iPCeThbSZOHnDbV5kx49lmx/uEtZ2KtFlQzsPsjOMtW8ZreSy534pTliAa7ayg9Tj68fGr5RWMhHS0N4X2bFu0/YO+ghrElt8oJuYQ9tOJQtupei6AZJ1z5aKa3jzWCZCGtq7uiVHU32FtZ2Z2AAQ7T1oPzQSs1z74FaJ1wPS8CJ77S4VZ/fsUCZCGrpptCVHU32HNYkuG7qLcSHCJYX24a0Ub/6Yht3Q5lLhXeKprVx2gJ2J1yna2cqeQ4993ukQYW1nJrps6GZqoW2nEOEN8TkMZ0vFtTDgmlxswYHueu2mHRoyrEl02dCPGK6I0EWhtwGOS9QgBIfDmitNK5ztlLKDKyENXQzSTTs0dFjbmYkuG7p7ke32vFDc82GuyWQHkeL1T052MIYn7YPZUtN+jVWy4xKvLXQ1WDft0FhhTaLLhv5sZc+le01jnkwThd524Fhxii6etQ9lK02za3Ysk4W0ueheo7vBu2mHxgxrOzPRZUN/prKCtI1SdhJUvH5wIoRTnmQnNSvtA1pKcrFoAP3qvG/arTzCmsTVD9C/Z+2HSFNW6G2AK0QXIRUvslC2lIWytdLomJ1Tivlo6FenqxB04RXWdipx9QP0K8Uh0iZKWYjLtQ90DKXG6TCUrQ8+x36ocyae3+jXZ9lxZePx4N5hTbIX11zSr75lYIK+yoLbo28ZQSu0X9CQHfydA52vXSBbyQ4Oy9c/Vz7lBC+XHUcqcfKPfj3LumkrzyJCCGs7pezAypAN+vYie24tRLftFvmZj0yEua52YWz3sdF+6HLtUVCk6tcP5muib1vZCcC9bxkmpLC2M5f0u3cRmKyvsk7bwreMyShf/8xfP6R9d05K7yD6rP0wyfL1z432Z+VLoatCNsxZiS4ahvFV9hxb+5axF2JYk9jmA8PbzW1biKGlsRTah7js9e+HyhM/k2m8Lt6u23VsefT39dHtjr+P/mXad9Ho6mIoL7KQ9uhbxrdCDWs7lViAgOH9oIDOoAB8YyOOAxjW6Ntx3OJ77wKueJR12b74loEJexBBDQjdvXcBmKwnST/KOmob10ouCL2zdqiQvWAZGkWf6KoB4ctkr1O6a+jLVhbQFr5lNBN6Z+3QSjan5ZPsPxnoiq4aEIeNbIgK6MMX7efGRyGmztqhTOzNhu7oqgFxWYvtndDek6ybtvIt43YxddYObWT/4T/K/vOBW30RQQ2Izdy7AERpKxuVKxVhUJPi7awdq2UvYs640MRW1gLf+JYBoIW1eK9Hc66XiepLrJ21YwvZAoTPvmUgEveK/IULJGzuXQCi8CSb6jLXBN7vp9JZO5TLDsYffMtAoOiqAfFbip0BcNqLbLRt6VtGv6bSWTu0lm2m+7Ps0i/AobkIakDs5t4FIDhbSb/JTsaXrpUMYIqdtWO1mM8G86L99SsBxG0pumswQV99oA8phDXJtvqYvX6wqWK6PimifXUAXJRL+tO7CLgK7oLrQ5niMOgpG1nqLmQboSI9TyKoAVOyFu/nqXqSTXWqlEBQk9LprB3LZQduWujp+FkTnMcAJC4Tl6FKyYus8bLwLWN8qXTWjq1lm+P9LDbVTcGDCGrAFG3ERd5TcLh4YOFaiZNUO2vHarEIYcq4rBQwXZlsV3rev6dnKwvj95rw4oEmUu2sHVvIEvsnWZsV0/FZBDVgyjZiK48pepAdl+dKPKhJdNZOycTK0algA1wgHUsxD3kKHmQBbe1bRlgIa+dlIrTFjq06gHSUkv7wLgKtJbMNRxuEtesyEdpi9CR78waQjoWkj95F4CZPsk7a0reMsBHWmstlTyjeCOLAVh1AejKxlUcsCGk3YIFBc2vZqtEfxEaMoWOrDiBNG7HYIHS7DW1L8T7dGJ219nLRaQsRiwoArCS99y4Cb9BJ64DOWntr0WkL0VwENSB1M+8C8A86aT2gs9afXBYUKjFfwsuz7PqvALAQIx+e6KT1iLDWv0ysHvXCogIAO5lYbOCBkDYAhkH7t5E9UXPZ7vlbx1pS8kW8OQDY24jFBmN6kE0LKsV7ce/orA0vk81tm4lr1w2FRQUAzlmJxQZD4ooDIyCsjasWF4wfAlcqAHBOIel/3kVMzO4C6wsR0kZBWPNRyTptXMeuO65UAOCae0m/ehcxAS+ygHYvRjJGRVjzVcq6baxYau8HcWYH4LJMNhzKqEY7L7JRoYVvGeligYGvpd7u1cZihNt8FkENwHUbsfdaG7s90nIR1FzRWQtLJntDqcUZ4DXsqQbgVo+SPngXEQEWDQSGsBau+vWDeW2n/Sgb1gCApjKx99o5zEcLGMOg4VrI5rT9KC5ndeyLCGoAbrcRe68de5KtqM/F5fqCRWctHpkYIpXs7K8QbygA2luKUYsHWRdt5VsGmiCsxalWukOkXFIKQFe5LKSkNhzKUGekCGtxy5XWxeO/iBVdAPoxk/Rv7yJG8lUW0h59y0BbhLVpyLTfaHeql1Vh+BNA35aa7gjFVvsu2tqzEHRHWJueQhbaKk2r28bwJ4C+5ZrecOiTLKQtfMtAnwhr05VpOt02hj8BDGWm+IdD6aJNHGEtDYXi7bYx/AlgaEvFORzKXLREENbSU8tCWyy7eDP8CWBoueIZDn2RddAeRRctGYS1dOXaD5OGum/bZ7GBJYBxVJL+613EGVtZOLsX+6IlibAGKcxhUq79CWBsjwpr1OGrrKaFbxnwRljDsVphDJNy7U8AY8vkf+3QZ+3noa0d60BACGs4J5PfatLfZO1+ABhbKemPkR/zRfthzvXIj40IENbQRC4LbrWGD25PsjdLAPByL+nXgR+DeWhojLCGW+Xaz2/re2HC9vX+Nz3fLwDcaqX+T053AW33ATRCWEMXhfZz3PoIbr+INzAAYShk2wZ1nb9GQENnhDX0pVC34MZVCgCEZqZ2VzcgoKFXhDUMoZAFt1LNhhGeX2+7GageAGjrUc1WxxPQMBjCGoaW6/LihK0sqK1GqgcAbpHJ3p9OjRjsVnEuRUDDgAhrGFMuC2aV9meqn8SGjwDCVkj63+vnz7JwthAnmRgJYQ1eMu0n8AJA6ErZHmhr1yqQpP8PbZvyz3AaVVIAAAAASUVORK5CYII="
                />
              </defs>
            </svg>
            <svg
              width="32"
              height="31"
              viewBox="0 0 32 31"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
            >
              <rect width="32" height="31" fill="url(#pattern0_11_30)" />
              <defs>
                <pattern
                  id="pattern0_11_30"
                  patternContentUnits="objectBoundingBox"
                  width="1"
                  height="1"
                >
                  <use
                    xlink:href="#image0_11_30"
                    transform="matrix(0.00206117 0 0 0.00212766 -0.137932 0)"
                  />
                </pattern>
                <image
                  id="image0_11_30"
                  width="619"
                  height="470"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAmsAAAHWCAYAAAAo8M7SAAAACXBIWXMAADXUAAA11AFeZeUIAAAFyWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgOS4wLWMwMDAgNzkuMTcxYzI3ZiwgMjAyMi8wOC8xNi0xODowMjo0MyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDI0LjAgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMy0xMi0yNVQxNzoxOTowOCswMjowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTItMjVUMTc6MjA6NTQrMDI6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjMtMTItMjVUMTc6MjA6NTQrMDI6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOmZjOWMzZmJhLTU4NTktY2I0ZS04MzJlLTg0ZWVlMTVkNDgzOSIgeG1wTU06RG9jdW1lbnRJRD0i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"
                />
              </defs>
            </svg>
            <svg
              width="29"
              height="27"
              viewBox="0 0 29 27"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
            >
              <rect width="29" height="27" fill="url(#pattern0_11_31)" />
              <defs>
                <pattern
                  id="pattern0_11_31"
                  patternContentUnits="objectBoundingBox"
                  width="1"
                  height="1"
                >
                  <use
                    xlink:href="#image0_11_31"
                    transform="matrix(0.00198092 0 0 0.00212766 -0.113096 0)"
                  />
                </pattern>
                <image
                  id="image0_11_31"
                  width="619"
                  height="470"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAmsAAAHWCAYAAAAo8M7SAAAACXBIWXMAADXUAAA11AFeZeUIAAAFyWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgOS4wLWMwMDAgNzkuMTcxYzI3ZiwgMjAyMi8wOC8xNi0xODowMjo0MyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDI0LjAgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMy0xMi0yNVQxNzoxOTowOCswMjowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTItMjVUMTc6MjE6MjArMDI6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjMtMTItMjVUMTc6MjE6MjArMDI6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOmNiMjFjYjU1LWUyNzQtYWY0NC05MTc5LWVlNGQ3MWNiOTdhMSIgeG1wTU06RG9jdW1lbnRJRD0i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"
                />
              </defs>
            </svg>
          </div>
        </div>
        <div class="footer__uls">
          <ul class="xl:mr-36 lg:mr-36">
            <li>Полезно</li>
            <li onclick="window.location.href='buy.html'">Купить робуксы</li>
            <li>Отзывы</li>
            <li onclick="openModal('Purchases')">Мои покупки</li>
          </ul>
          <ul>
            <li>Помощь</li>
            <li>FAQ</li>
            <li onclick="openModal('TermsOfUses')">
              Пользовательское соглашение
            </li>
            <li onclick="openModal('PrivacyPolicy')">
              Политика конфиденциальности
            </li>
          </ul>
          <ul>
            <li>Сотрудничество</li>

            <li class="max-w-[200px]">Получи 100R$ за видео о нашем сайте!</li>
          </ul>
        </div>
      </div>
      <div
        class="flex items-center justify-center text-gray font-medium text-base"
      >
        rbx.market © 2023. All rights reserved.
      </div>
    </footer>
    <div class="modal" id="TermsOfUses">
      <div class="modal_content overflow-scroll max-w-[385px] max-h-[391px]">
        <div>
          <span class="text-white font-semibold text-base">
            СОГЛАШЕНИЕ ОБ УСЛОВИЯХ ПОЛЬЗОВАНИЯ ИНФОРМАЦИИ — КОМПАНИИ
            RBXMARKET.IO
          </span>
          <div class="mt-4">
            <span class="text-gray">
              <b
                >НАСТОЯЩЕЕ СОГЛАШЕНИЕ ПРИЗВАНО РЕГУЛИРОВАТЬ ОТНОШЕНИЯ МЕЖДУ
                ПОЛЬЗОВАТЕЛЕМ И ПРАВООБЛАДАТЕЛЕМ ИНТЕРНЕТ-ПОРТАЛА</b
              >
              <br />
              <br />
              СОДЕРЖАНИЕ:
              <br />
              <br />
              1.ИСПОЛЬЗУЕМЫЕ ТЕРМИНЫ. <br />
              <br />
              2. ПРЕДМЕТ СОГЛАШЕНИЯ. <br />
              <br />
              3. ПОРЯДОК ВСТУПЛЕНИЯ СОГЛАШЕНИЯ В СИЛУ. <br />
              <br />

              4. ПРАВА И ОБЯЗАННОСТИ СТОРОН. <br />
              <br />
              4.1 ПРАВА ПОЛЬЗОВАТЕЛЯ. <br />
              <br />
              4.2 ОБЯЗАННОСТИ ПОЛЬЗОВАТЕЛЯ. <br />
              <br />
              4.3 ПОЛЬЗОВАТЕЛЬ НЕ ИМЕЕТ ПРАВА. <br />
              <br />
              4.4 ПРАВА ОПЕРАТОРА. <br />
              <br />
              4.5 ОБЯЗАННОСТИ ОПЕРАТОРА. <br />
              <br />
              4.6 ОГРАНИЧЕНИЕ ОТВЕТСТВЕННОСТИ ОПЕРАТОРА. <br />
              <br />
              4.7 ОПЕРАТОР НЕ ГАРАНТИРУЕТ. <br />
              <br />

              5. КОНФИДЕНЦИАЛЬНОСТЬ И БЕЗОПАСНОСТЬ. <br />
              <br />6. ДОПОЛНИТЕЛЬНЫЕ ПЛАТНЫЕ УСЛУГИ И ПОРЯДОК ОПЛАТЫ. <br />
              <br />
              7. ОТКАЗ ОТ ПРЕДОСТАВЛЕНИЯ ГАРАНТИЙ. <br />
              <br />
              8. ДОПОЛНИТЕЛЬНЫЕ ПОЛОЖЕНИЯ. <br />
              <br />9. КОНТАКТНАЯ ИНФОРМАЦИЯ. <br /><br />1. ИСПОЛЬЗУЕМЫЕ
              ТЕРМИНЫ «ОПЕРАТОР» - ПРАВООБЛАДАТЕЛЬ ПОРТАЛА HTTPS://RBXMARKET.IO,
              ЯВЛЯЕТСЯ СТОРОНОЙ ПОЛЬЗОВАТЕЛЬСКОГО СОГЛАШЕНИЯ.
              <br /><br />ОПЕРАТОР ОСУЩЕСТВЛЯЕТ АДМИНИСТРИРОВАНИЕ И
              ОБСЛУЖИВАНИЕ, ПРЕДОСТАВЛЯЕТ ДОСТУП ПОЛЬЗОВАТЕЛЕЙ К ПОРТАЛУ,
              УСЛУГАМ (ТАКЖЕ ПЛАТНЫМ УСЛУГАМ), НА УСЛОВИЯХ НАСТОЯЩЕГО
              СОГЛАШЕНИЯ. <br /><br />«ПОЛЬЗОВАТЕЛЬ» - ФИЗИЧЕСКОЕ ЛИЦО,
              ПОСЕЩАЮЩЕЕ ПОРТАЛ ИЛИ ПРИНИМАЮЩЕЕ УЧАСТИЕ В ПРОЕКТАХ ПОРТАЛА
              HTTPS://RBXMARKET.IO ПОЛЬЗОВАТЕЛЬ, РАВНО КАК И ОПЕРАТОР, ЯВЛЯЕТСЯ
              СТОРОНОЙ СОГЛАШЕНИЯ. <br /><br />«ПОРТАЛ» -РАЗМЕЩЕННЫЕ НА РЕСУРСАХ
              ОПЕРАТОРА СПЕЦИАЛЬНЫЕ ПРОГРАММНО-АППАРАТНЫЕ КОМПЛЕКСЫ.
              <br /><br />ДОСТУП ПОЛЬЗОВАТЕЛЕЙ К ПОРТАЛУ ОСУЩЕСТВЛЯЕТСЯ ТОЛЬКО
              ОПЕРАТОРОМ. <br /><br />ВСЕ ПРАВА НА ИСПОЛЬЗОВАНИЕ ДАННОГО ПОРТАЛА
              ПРИНАДЛЕЖАТ ИСКЛЮЧИТЕЛЬНО ОПЕРАТОРУ. «САЙТ» — САЙТ, РАСПОЛОЖЕННЫЙ
              В СЕТИ ИНТЕРНЕТ ПО АДРЕСУ HTTPS://RBXMARKET.IO «УСЛУГИ» —
              ПРЕДОСТАВЛЕНИЕ ПОЛЬЗОВАТЕЛЯМ ДОСТУПА К ПОРТАЛУ, ИСПОЛЬЗОВАНИЕ
              ВОЗМОЖНОСТЕЙ И СЕРВИСОВ, УЧАСТИЕ В ПРОЕКТАХ НА УСЛОВИЯХ,
              ОПРЕДЕЛЕННЫХ СОГЛАШЕНИЯМИ. <br /><br />УСЛУГИ ОПЕРАТОРА
              ПРЕДОСТАВЛЯЮТСЯ НА БЕЗВОЗМЕЗДНОЙ ОСНОВЕ. И<br /><br />СКЛЮЧЕНИЯ
              СОСТАВЛЯЮТ ТОЛЬКО ДОПОЛНИТЕЛЬНЫЕ ПЛАТНЫЕ УСЛУГИ. <br /><br />ВСЕ
              УСЛУГИ ПРЕДОСТАВЛЯЮТСЯ ОПЕРАТОРОМ ТОЛЬКО ВНУТРИ ПОРТАЛА, Т.Е. ВО
              ВРЕМЯ ЕГО ИСПОЛЬЗОВАНИЯ ПОЛЬЗОВАТЕЛЕМ. <br /><br />«ДОПОЛНИТЕЛЬНЫЕ
              ПЛАТНЫЕ УСЛУГИ» – ПРЕДОСТАВЛЕНИЕ ПОЛЬЗОВАТЕЛЮ ДОПОЛНИТЕЛЬНЫХ
              СПЕЦИАЛЬНЫХ ВОЗМОЖНОСТЕЙ ПОРТАЛА ЗА ПЛАТУ. <br /><br />ДАННЫЕ
              УСЛУГИ НЕ ЯВЛЯЮТСЯ ОБЯЗАТЕЛЬНЫМИ И ПРЕДОСТАВЛЯЮТСЯ ПО ЖЕЛАНИЮ,
              ЗАПРОСУ ПОЛЬЗОВАТЕЛЯ. ПЛАТНЫЕ УСЛУГИ ТАКЖЕ ПРЕДОСТАВЛЯЮТСЯ
              ОПЕРАТОРОМ ИСКЛЮЧИТЕЛЬНО ВНУТРИ ПОРТАЛА <br /><br />2. ПРЕДМЕТ
              СОГЛАШЕНИЯ <br /><br />2.1. ПРЕДОСТАВЛЕНИЕ ОПЕРАТОРОМ ДОСТУПА К
              ПОРТАЛУ (УСЛУГАМ, СЕРВИСАМ, ПЛАТНЫМ УСЛУГАМ) НЕОГРАНИЧЕННОМУ КРУГУ
              ЛИЦ, НА УСЛОВИЯХ ДАННОГО СОГЛАШЕНИЯ. <br /><br />2.2. ПОЛЬЗОВАТЕЛЬ
              ОСОЗНАЕТ, ЧТО ОСНОВНАЯ ЦЕЛЬ ПРОЕКТОВ ПОРТАЛА HTTPS://RBXMARKET.IO
              ЗАКЛЮЧАЕТСЯ В ОРГАНИЗАЦИИ ОПЕРАТОРОМ ДОСУГА И РАЗВЛЕЧЕНИЙ, НИКОИМ
              ОБРАЗОМ НЕ СВЯЗАННЫХ С АЗАРТНЫМИ ИГРАМИ. <br /><br />3. ПОРЯДОК
              ВСТУПЛЕНИЯ СОГЛАШЕНИЯ В СИЛУ <br /><br />3.1. С МОМЕНТА ПРИНЯТИЯ
              ДАННОГО СОГЛАШЕНИЯ, ПОЛЬЗОВАТЕЛЬ ИМЕЕТ ПРАВА И ИСПОЛНЯЕТ
              ОБЯЗАННОСТИ, ОГОВОРЕННЫЕ В ТЕКСТЕ НАСТОЯЩЕГО СОГЛАШЕНИЯ.
              <br /><br />3.2. ПОЛЬЗОВАТЕЛЬ ПРИНИМАЕТ И СОГЛАШАЕТСЯ С УСЛОВИЯМИ
              НАСТОЯЩЕГО СОГЛАШЕНИЯ ПУТЕМ РЕГИСТРАЦИИ НА САЙТЕ:
              HTTPS://RBXMARKET.IO ФАКТ ПРИНЯТИЯ ОЗНАЧАЕТ ПОЛНОЕ И
              БЕЗОГОВОРОЧНОЕ СОГЛАСИЕ ПОЛЬЗОВАТЕЛЯ СО ВСЕМИ УСЛОВИЯМИ И
              ПРИЛОЖЕНИЯМИ ДАННОГО СОГЛАШЕНИЯ. <br /><br />3.3. ЕСЛИ
              ПОЛЬЗОВАТЕЛЬ ПО КАКИМ-ЛИБО ПРИЧИНАМ НЕ СОГЛАСЕН С УСЛОВИЯМИ ИЛИ
              ПРИЛОЖЕНИЯМИ НАСТОЯЩЕГО СОГЛАШЕНИЯ, ОН ОБЯЗАН ПРЕКРАТИТЬ
              ДАЛЬНЕЙШЕЕ ИСПОЛЬЗОВАНИЕ САЙТА. <br /><br />3.4. ИСПОЛЬЗОВАТЬ САЙТ
              МОЖНО ТОЛЬКО ПОСЛЕ ПРИНЯТИЯ НАСТОЯЩЕГО СОГЛАШЕНИЯ ПОЛЬЗОВАТЕЛЕМ.
              <br /><br />3.5. ПРИНИМАЯ НАСТОЯЩЕЕ СОГЛАШЕНИЕ, ПОЛЬЗОВАТЕЛЬ
              ПОДТВЕРЖДАЕТ СВОЮ ДЕЕСПОСОБНОСТЬ, ПРАВО ЗАКЛЮЧАТЬ ДАННОЕ
              СОГЛАШЕНИЕ. ОПЕРАТОР НЕ ОБЯЗАН ОСУЩЕСТВЛЯТЬ ПРОВЕРКУ ДАННЫХ,
              УКАЗАННЫХ ПОЛЬЗОВАТЕЛЕМ ПРИ РЕГИСТРАЦИИ. <br /><br />3.6. ЕСЛИ ДЛЯ
              ПОЛЬЗОВАНИЯ ИНФОРМАЦИОННО-РАЗВЛЕКАТЕЛЬНЫМ ПОРТАЛОМ
              HTTPS://RBXMARKET.IO ИЛИ УЧАСТИЯ В ПРОЕКТАХ ПОРТАЛА НЕОБХОДИМО
              СОЗДАТЬ УЧЕТНУЮ ЗАПИСЬ (ДАЛЕЕ “УЧЕТНАЯ ЗАПИСЬ”), ТО ПОЛЬЗОВАТЕЛЬ
              ДОЛЖЕН ПРОЙТИ ПРОЦЕСС РЕГИСТРАЦИИ, ПРЕДОСТАВИВ ОПЕРАТОРУ
              АКТУАЛЬНУЮ, ПОЛНУЮ И ТОЧНУЮ ИНФОРМАЦИЮ (ВКЛЮЧАЯ АДРЕС ЭЛЕКТРОННОЙ
              ПОЧТЫ) В СООТВЕТСТВУЮЩЕЙ ФОРМЕ. В СЛУЧАЕ РАЗМЕЩЕНИЯ НА ПОРТАЛЕ
              HTTPS://RBXMARKET.IO СООБЩЕНИЙ ОБ УЧАСТИИ В ПАРТНЕРСКИХ
              ПРОГРАММАХ, ЗАРЕГИСТРИРОВАННЫЙ ПОЛЬЗОВАТЕЛЬ ИМЕЕТ ПРАВО УЧАСТИЯ В
              КОНКУРСАХ, РОЗЫГРЫШАХ, СОРЕВНОВАНИЯХ НА САЙТЕ ПАРТНЕРОВ
              HTTPS://RBXMARKET.IO. <br /><br />4. ПРАВА И ОБЯЗАННОСТИ СТОРОН
              <br /><br />4.1. ПРАВА ПОЛЬЗОВАТЕЛЯ В СООТВЕТСТВИИ С НАСТОЯЩИМ
              СОГЛАШЕНИЕМ ПОЛЬЗОВАТЕЛЬ ИМЕЕТ ПРАВО: ИСПОЛЬЗОВАТЬ ПОРТАЛ ТОЛЬКО В
              ЛИЧНЫХ, НЕКОММЕРЧЕСКИХ ЦЕЛЯХ. ПОЛЬЗОВАТЬСЯ ВСЕМИ СЕРВИСАМИ,
              РЕСУРСАМИ (ВКЛЮЧАЯ ДОПОЛНИТЕЛЬНЫЕ ПЛАТНЫЕ УСЛУГИ) ПРЕДОСТАВЛЯЕМЫЕ
              ОПЕРАТОРОМ. ПРИ НЕОБХОДИМОСТИ ВОСПОЛЬЗОВАТЬСЯ ТЕХНИЧЕСКОЙ
              ПОДДЕРЖКОЙ САЙТОВ, ОБРАТИТЬСЯ ПО ВОЗНИКАЮЩИМ ВОПРОСАМ К ОПЕРАТОРУ,
              ЧЕРЕЗ КОНТАКТНЫЕ ДАННЫЕ ИЛИ ФОРМУ ОБРАТНОЙ СВЯЗИ. БЕЗВОЗМЕЗДНО
              (ИСКЛЮЧАЯ ПРЕДОСТАВЛЕНИЕ ДОПОЛНИТЕЛЬНЫХ ПЛАТНЫХ УСЛУГ)
              ИСПОЛЬЗОВАТЬ САЙТ И УЧАСТВОВАТЬ В ПРОЕКТАХ ПОРТАЛА.
              <br /><br />4.2. ОБЯЗАННОСТИ ПОЛЬЗОВАТЕЛЯ СОБЛЮДАЯ УСЛОВИЯ
              НАСТОЯЩЕГО СОГЛАШЕНИЯ, ПОЛЬЗОВАТЕЛЬ ОБЯЗАН: УКАЗЫВАТЬ ДОСТОВЕРНУЮ
              ИНФОРМАЦИЮ ПРИ РЕГИСТРАЦИИ НА САЙТЕ. САМОСТОЯТЕЛЬНО ПРИНИМАТЬ ВСЕ
              НЕОБХОДИМЫЕ МЕРЫ, ОБЕСПЕЧИВАЮЩИЕ ЭФФЕКТИВНУЮ БЕЗОПАСНОСТЬ ЛИЧНОЙ
              УЧЕТНОЙ ЗАПИСИ. НЕ ПРЕДОСТАВЛЯТЬ К НЕЙ ДОСТУП ТРЕТЬИМ ЛИЦАМ. ПРИ
              НЕОБХОДИМОСТИ, ПО ТРЕБОВАНИЮ ОПЕРАТОРА, ПРЕДОСТАВЛЯТЬ
              ПОДТВЕРЖДЕНИЯ СВОИХ ПЕРСОНАЛЬНЫХ ДАННЫХ, УКАЗАННЫХ НА САЙТЕ В
              МОМЕНТ ПРОХОЖДЕНИЯ РЕГИСТРАЦИИ. ВЫПОЛНЯТЬ УКАЗАНИЯ ОПЕРАТОРА В
              ПРЕДЕЛАХ ДАННОГО ПОРТАЛА. НЕ НАРУШАТЬ ПРАВА АВТОРСКОЙ И
              ИНТЕЛЛЕКТУАЛЬНОЙ СОБСТВЕННОСТИ ОПЕРАТОРА, НАХОДЯЩИХСЯ НА ЕГО
              ПОРТАЛЕ. СОБЛЮДАТЬ ВСЕ БЕЗ ОГРАНИЧЕНИЙ УСЛОВИЯ НАСТОЯЩЕГО
              СОГЛАШЕНИЯ. ПОЛЬЗОВАТЕЛЬ ОБЯЗУЕТСЯ ИСПОЛЬЗОВАТЬ ПОРТАЛ
              ИСКЛЮЧИТЕЛЬНО В РАЗВЛЕКАТЕЛЬНЫХ ЦЕЛЯХ, НЕ ПРЕСЛЕДУЯ ПОЛУЧЕНИЕ
              КАКОЙ-ЛИБО ВЫГОДЫ ОТ ПОРТАЛА. <br /><br />4.3. ПОЛЬЗОВАТЕЛЬ НЕ
              ИМЕЕТ ПРАВА ИСПОЛЬЗУЯ ПОРТАЛ ОПЕРАТОРА, ПОЛЬЗОВАТЕЛЬ НЕ ВПРАВЕ:
              ИСПОЛЬЗОВАТЬ ОШИБКИ (БАГИ) САЙТА И СЕРВИСОВ ПОРТАЛА, НЕ
              САНКЦИОНИРОВАНО ПОЛУЧАТЬ ДОСТУП К ОБЩЕЙ БАЗЕ ДАННЫХ, КОМПЬЮТЕРНОЙ
              СИСТЕМЕ, ИЗМЕНЯТЬ ПРОГРАММНЫЙ КОД. ПОЛЬЗОВАТЕЛЮ ЗАПРЕЩАЕТСЯ
              ИСПОЛЬЗОВАТЬ ВРЕДОНОСНЫЕ ПРОГРАММЫ, СПОСОБНЫЕ НАНЕСТИ ВРЕД
              ПОРТАЛУ, А ТАКЖЕ СПЕЦИАЛЬНОЕ ПРОГРАММНОЕ ОБЕСПЕЧЕНИЕ, ДАЮЩЕЕ ЕМУ
              ПРЕВОСХОДСТВО ПЕРЕД ДРУГИМИ ПОЛЬЗОВАТЕЛЯМИ. ПРИ ВЫЯВЛЕНИИ ТАКИХ И
              ПОДОБНЫХ НАРУШЕНИЙ, ОПЕРАТОР ВПРАВЕ ПРИМЕНИТЬ К ПОЛЬЗОВАТЕЛЮ
              ШТРАФНЫЕ САНКЦИИ, ВКЛЮЧАЯ ЗАПРЕТ ДОСТУПА К САЙТАМ И УДАЛЕНИЕ
              АККАУНТА. ОГРАНИЧИВАТЬ ДОСТУП К САЙТАМ ДРУГИХ ПОЛЬЗОВАТЕЛЕЙ.
              ЗАНИМАТЬСЯ МОШЕННИЧЕСТВОМ И ДРУГИМИ ПРОТИВОПРАВНЫМИ ДЕЙСТВИЯМИ.
              РЕКЛАМИРОВАТЬ ЧТО-ЛИБО, НЕ ИМЕЮЩЕЕ ОТНОШЕНИЕ К ПОРТАЛУ БЕЗ
              ПИСЬМЕННОГО РАЗРЕШЕНИЯ ОПЕРАТОРА. ИСПОЛЬЗОВАТЬ НЕНОРМАТИВНУЮ
              ЛЕКСИКУ, ВЫРАЖАТЬ УГРОЗЫ В АДРЕС ОПЕРАТОРА ИЛИ ДРУГИХ
              ПОЛЬЗОВАТЕЛЕЙ, РАСПРОСТРАНЯТЬ МАТЕРИАЛЫ, ПРОПАГАНДИРУЮЩИЕ НАСИЛИЕ,
              РАСОВУЮ НЕНАВИСТЬ, НЕПРИЯТИЕ К РЕЛИГИОЗНЫМ ВЕРОВАНИЯМ, СОДЕРЖАЩИЕ
              ПОРНОГРАФИЧЕСКУЮ ИНФОРМАЦИЮ, РЕКЛАМИРУЮЩИЕ НАРКОТИКИ, ПРИЗЫВАЮЩИЕ
              К НАСИЛЬСТВЕННОМУ СВЕРЖЕНИЮ ВЛАСТИ. ПРОВОДИТЬ АНТИРЕКЛАМУ ПОРТАЛА,
              В ТОМ ЧИСЛЕ, ЗА ИХ ПРЕДЕЛАМИ. ПОЛЬЗОВАТЕЛЬ СОГЛАШАЕТСЯ, ЧТО ЕГО
              ПРАВА И ОБЯЗАННОСТИ МОГУТ БЫТЬ ИЗМЕНЕНЫ/ДОПОЛНЕНЫ ОПЕРАТОРОМ, О
              ЧЕМ ОН УВЕДОМЛЯЕТСЯ ПО КОНТАКТНЫМ ДАННЫМ, УКАЗАННЫМ ПРИ
              РЕГИСТРАЦИИ (ИЛИ НА САЙТЕ) <br /><br />4.4. ПРАВА ОПЕРАТОРА
              НАСТОЯЩЕЕ СОГЛАШЕНИЕ ПРЕДОСТАВЛЯЕТ ОПЕРАТОРУ СЛЕДУЮЩИЕ ПРАВА: В
              ЛЮБОЕ ВРЕМЯ, ПО СВОЕМУ УСМОТРЕНИЮ, В ОДНОСТОРОННЕМ ПОРЯДКЕ БЕЗ
              ПРЕДВАРИТЕЛЬНОГО УВЕДОМЛЕНИЯ ПОЛЬЗОВАТЕЛЕЙ, РАСШИРИТЬ, ИЗМЕНИТЬ,
              ПРЕКРАТИТЬ, ОГРАНИЧИТЬ ОКАЗАНИЕ УСЛУГ, А РАВНО И ДОПОЛНИТЕЛЬНЫХ
              ПЛАТНЫХ УСЛУГ УПРАВЛЯТЬ ВСЕМИ ПРОЦЕССАМИ НА ПОРТАЛАХ ИСКЛЮЧИТЕЛЬНО
              ПО СВОЕМУ УСМОТРЕНИЮ. ПРИОСТАНАВЛИВАТЬ, ИЗМЕНЯТЬ ХОД ЛЮБЫХ
              ПРОЦЕССОВ, НЕ УВЕДОМЛЯЯ ПРЕДВАРИТЕЛЬНО ПОЛЬЗОВАТЕЛЯ. ПРИМЕНЯТЬ К
              ПОЛЬЗОВАТЕЛЮ САНКЦИИ В СЛУЧАЕ ВЫЯВЛЕНИЯ НАРУШЕНИЙ ДАННОГО
              СОГЛАШЕНИЯ. УДАЛЯТЬ/ИЗМЕНЯТЬ ИНФОРМАЦИЮ ПОЛЬЗОВАТЕЛЯ, РАЗМЕЩЕННУЮ
              НА ПОРТАЛАХ. ОТСЛЕЖИВАТЬ, СОХРАНЯТЬ ИДЕНТИФИКАЦИОННУЮ И
              СТАТИСТИЧЕСКУЮ ИНФОРМАЦИЮ О ПОЛЬЗОВАТЕЛЕ. РАССЫЛАТЬ ПОЛЬЗОВАТЕЛЯМ
              ТЕХНИЧЕСКУЮ, РЕКЛАМНУЮ И ИНУЮ ИНФОРМАЦИЮ, КАСАЮЩУЮСЯ ПОРТАЛА,
              УСЛУГ И ПЛАТНЫХ УСЛУГ. ИНФОРМИРОВАТЬ, ПРЕДУПРЕЖДАТЬ, ДЕЛАТЬ
              ЗАМЕЧАНИЯ, УВЕДОМЛЯТЬ ПОЛЬЗОВАТЕЛЯ В СЛУЧАЕ НЕСОБЛЮДЕНИЯ/НАРУШЕНИЯ
              УСЛОВИЙ НАСТОЯЩЕГО СОГЛАШЕНИЯ. ВСЕ УКАЗАНИЯ ОПЕРАТОРА ДОЛЖНЫ
              НЕУКОСНИТЕЛЬНО ВЫПОЛНЯТЬСЯ. ПРИНИМАТЬ ЗАКОННЫЕ МЕРЫ ДЛЯ ЗАЩИТЫ
              СВОЕЙ ИНТЕЛЛЕКТУАЛЬНОЙ, АВТОРСКОЙ СОБСТВЕННОСТИ. МОДИФИЦИРОВАТЬ,
              ИЗМЕНЯТЬ, ДОПОЛНЯТЬ ПОРТАЛ ПО СВОЕМУ УСМОТРЕНИЮ, НЕ ПРЕДУПРЕЖДАЯ
              ЗАРАНЕЕ ПОЛЬЗОВАТЕЛЯ. БЕЗДЕЙСТВИЕ ОПЕРАТОРА НА НАРУШЕНИЯ
              ПОЛЬЗОВАТЕЛЕМ ДАННОГО СОГЛАШЕНИЯ, НЕ ИСКЛЮЧАЮТ ПРИМЕНЕНИЯ ИМ
              ШТРАФНЫХ САНКЦИЙ ПОЗДНЕЕ. <br /><br />4.5. ОБЯЗАННОСТИ ОПЕРАТОРА
              ЯВЛЯЯСЬ СТОРОНОЙ ПОЛЬЗОВАТЕЛЬСКОГО СОГЛАШЕНИЯ, ОПЕРАТОР ОБЯЗАН:
              ОБЕСПЕЧИТЬ ВОЗМОЖНОСТЬ ПОЛУЧЕНИЯ ПОЛЬЗОВАТЕЛЕМ УСЛУГ ОПЕРАТОРА
              ВНУТРИ ДАННОГО ПОРТАЛА (ВКЛЮЧАЯ ПОЛУЧЕНИЕ ДОПОЛНИТЕЛЬНЫХ ПЛАТНЫХ
              УСЛУГ). ОТВЕЧАТЬ НА ВОПРОСЫ ПОЛЬЗОВАТЕЛЕЙ, ПРИ ВОЗНИКНОВЕНИИ
              СПОРНЫХ СИТУАЦИЙ ПРИНИМАТЬ ВСЕ МЕРЫ К ИХ УРЕГУЛИРОВАНИЮ.
              <br /><br />4.6. ОГРАНИЧЕНИЕ ОТВЕТСТВЕННОСТИ ОПЕРАТОРА В
              СООТВЕТСТВИИ С ДАННЫМ РАЗДЕЛОМ, ОПЕРАТОР НЕ НЕСЕТ ОТВЕТСТВЕННОСТИ
              ЗА: ЛЮБОЙ УЩЕРБ, НАНЕСЕННЫЙ ИЛИ КОТОРЫЙ ТОЛЬКО МОЖЕТ БЫТЬ НАНЕСЕН,
              ПЕРСОНАЛЬНЫМ ДАННЫМ И КОМПЬЮТЕРУ ПОЛЬЗОВАТЕЛЯ В СВЯЗИ С
              ИСПОЛЬЗОВАНИЕМ ПОРТАЛА И САЙТА. УБЫТКИ (ПРЯМЫЕ/НЕПРЯМЫЕ),
              ПРИЧИНЕННЫЕ ПОЛЬЗОВАТЕЛЮ В СВЯЗИ С ИСПОЛЬЗОВАНИЕМ ИЛИ
              НЕДОСТУПНОСТЬЮ ПОРТАЛА (НЕВОЗМОЖНОСТЬЮ ИХ ИСПОЛЬЗОВАНИЯ),
              ПОВЕДЕНИЕМ ТРЕТЬИХ ЛИЦ НА ПОРТАЛЕ, РАВНО КАК И ДРУГИХ УЧАСТНИКОВ
              ПРОЕКТОВ ПОРТАЛА, НЕСАНКЦИОНИРОВАННОГО ДОСТУПА К ПЕРСОНАЛЬНЫМ
              ДАННЫМ ПОЛЬЗОВАТЕЛЯ. ВЫСКАЗЫВАНИЯ, РАСПРОСТРАНЯЕМУЮ ИНФОРМАЦИЮ,
              ЗАЯВЛЕНИЯ ПОЛЬЗОВАТЕЛЯ И ДРУГИЕ ПРОТИВОПРАВНЫЕ ДЕЙСТВИЯ,
              ОСУЩЕСТВЛЯЕМЫЕ ИМ НА ПОРТАЛЕ И ЗА ЕГО ПРЕДЕЛАМИ. УКАЗАННУЮ
              ПОЛЬЗОВАТЕЛЕМ ИНФОРМАЦИЮ ПРИ РЕГИСТРАЦИИ, УТЕРЯННУЮ ВОЗМОЖНОСТЬ
              ДОСТУПА К ПОРТАЛУ (ЛОГИН, ПАРОЛЬ И Т.Д.). УТРАТУ ПОЛЬЗОВАТЕЛЕМ
              ПРИОБРЕТЕННЫХ ВИРТУАЛЬНЫХ ЦЕННОСТЕЙ, В РЕЗУЛЬТАТЕ ПРЕДОСТАВЛЕНИЯ
              УСЛУГ И ДОПОЛНИТЕЛЬНЫХ ПЛАТНЫХ УСЛУГ ОПЕРАТОРОМ. ОПЛАТУ
              ПОЛЬЗОВАТЕЛЕМ ДОПОЛНИТЕЛЬНЫХ ПЛАТНЫХ УСЛУГ И СВЯЗАННЫХ С ЭТИМ
              РАСХОДОВ. БЕСПЕРЕБОЙНУЮ РАБОТУ ПОРТАЛА. ВОЗМОЖНОСТИ ПОЛЬЗОВАТЕЛЯ,
              СВЯЗАННЫЕ С ВЫХОДОМ В ИНТЕРНЕТ, СКОРОСТЬЮ ПЕРЕДАЧИ ДАННЫХ.
              <br /><br />4.7. ОПЕРАТОР НЕ ГАРАНТИРУЕТ: НЕПРЕРЫВНУЮ, НАДЕЖНУЮ,
              БЕЗ ОШИБОК РАБОТУ ПОРТАЛА, ДОСТУП К ЕГО РЕСУРСАМ, УСЛУГАМ, В ТОМ
              ЧИСЛЕ ДОПОЛНИТЕЛЬНЫМ ПЛАТНЫМ УСЛУГАМ. ФАКТ ТОГО, ЧТО ПОРТАЛ БУДУТ
              ПОЛНОСТЬЮ УДОВЛЕТВОРЯТЬ ТРЕБОВАНИЯМ И ПРЕДСТАВЛЕНИЯМ ПОЛЬЗОВАТЕЛЯ.
              СООТВЕТСТВИЕ КАЧЕСТВА ПРЕДОСТАВЛЯЕМЫХ УСЛУГ (ДОПОЛНИТЕЛЬНЫХ
              ПЛАТНЫХ УСЛУГ) ОЖИДАНИЯМ ПОЛЬЗОВАТЕЛЯ. ОПЕРАТОР НЕ ОБЯЗАН ПО
              ТРЕБОВАНИЮ ПОЛЬЗОВАТЕЛЯ ПРЕДСТАВЛЯТЬ ДОКУМЕНТЫ И ДРУГИЕ
              ДОКАЗАТЕЛЬСТВА, СВИДЕТЕЛЬСТВУЮЩИЕ О НАРУШЕНИИ (ПОЛЬЗОВАТЕЛЕМ)
              НАСТОЯЩЕГО СОГЛАШЕНИЯ И ПРИМЕНЕНИЯ ПРОТИВ НЕГО
              ШТРАФНЫХ/ДИСЦИПЛИНАРНЫХ САНКЦИЙ. ПОЛЬЗОВАТЕЛЬ ИСПОЛЬЗУЕТ ПОРТАЛ,
              САЙТ ОПЕРАТОРА ИСКЛЮЧИТЕЛЬНО НА СВОЙ СТРАХ И РИСК, ПО ДОБРОЙ ВОЛЕ,
              БЕЗ ПРИНУЖДЕНИЯ. ОН ПОНИМАЕТ О ВОЗМОЖНЫХ РИСКАХ, СВЯЗАННЫХ С
              ИСПОЛЬЗОВАНИЕМ РЕСУРСОВ ОПЕРАТОРА И НЕ ИМЕЕТ К ОПЕРАТОРУ ПРЕТЕНЗИЙ
              МАТЕРИАЛЬНОГО ХАРАКТЕРА. <br /><br />5. КОНФИДЕНЦИАЛЬНОСТЬ И
              БЕЗОПАСНОСТЬ 5<br /><br />.1. КОНФИДЕНЦИАЛЬНАЯ ИНФОРМАЦИЯ –
              ИНФОРМАЦИЯ, ПОЛУЧЕННАЯ ОПЕРАТОРОМ В ПРОЦЕССЕ РЕГИСТРАЦИИ
              ПОЛЬЗОВАТЕЛЯ НА САЙТЕ, А ТАКЖЕ В ХОДЕ ПОСЕЩЕНИЯ САЙТОВ/ПОРТАЛА И
              УЧАСТИЯ В СОБЫТИЯХ ПОРТАЛА. <br /><br />5.2. КОНФИДЕНЦИАЛЬНАЯ
              ИНФОРМАЦИЯ НЕ ПОДЛЕЖИТ РАЗГЛАШЕНИЮ И ПЕРЕДАЧЕ ТРЕТЬИМ ЛИЦАМ.
              <br /><br />5.3. ПЕРСОНАЛЬНЫЕ ДАННЫЕ МОГУТ БЫТЬ ПЕРЕДАНЫ
              ОПЕРАТОРОМ ИСКЛЮЧИТЕЛЬНО В СЛУЧАЯХ: ОФИЦИАЛЬНОГО ЗАПРОСА
              ПРАВООХРАНИТЕЛЬНЫХ ОРГАНОВ (НАРУШЕНИЕ МЕСТНОГО И МЕЖДУНАРОДНОГО
              ЗАКОНОДАТЕЛЬСТВА). ЛИЧНОГО ВОЛЕИЗЪЯВЛЕНИЯ ПОЛЬЗОВАТЕЛЯ.
              НЕВОЗМОЖНОСТИ ИСПОЛЬЗОВАНИЯ УСЛУГ И ДОПОЛНИТЕЛЬНЫХ ПЛАТНЫХ УСЛУГ
              НА ПОРТАЛАХ (О ЧЕМ ПОЛЬЗОВАТЕЛЬ ПРЕДУПРЕЖДАЕТСЯ ЗАРАНЕЕ).
              НАРУШЕНИЙ ПУНКТОВ ДАННОГО СОГЛАШЕНИЯ (НА УСМОТРЕНИЕ ОПЕРАТОРА).
              <br /><br />5.4. ОПЕРАТОР ОБЕСПЕЧИВАЕТ БЕЗОПАСНОСТЬ ПЕРСОНАЛЬНЫХ
              ДАННЫХ ПОЛЬЗОВАТЕЛЯ, ИСПОЛЬЗУЯ СПЕЦИАЛЬНОЕ ПРОГРАММНОЕ
              ОБЕСПЕЧЕНИЕ. В СЛУЧАЕ НЕСАНКЦИОНИРОВАННОГО ДОСТУПА К ПОРТАЛУ/САЙТУ
              ТРЕТЬИХ ЛИЦ, БЕЗОПАСНОСТЬ ПЕРСОНАЛЬНЫХ ДАННЫХ НЕ ГАРАНТИРУЕТСЯ. 6.
              ДОПОЛНИТЕЛЬНЫЕ ПЛАТНЫЕ УСЛУГИ <br /><br />6.1. ПО ЖЕЛАНИЮ
              ПОЛЬЗОВАТЕЛЯ, ОПЕРАТОР ПРЕДОСТАВЛЯЕТ ЕМУ ДОПОЛНИТЕЛЬНУЮ ПЛАТНУЮ
              УСЛУГУ. ОНА ПОЗВОЛЯЕТ ИСПОЛЬЗОВАТЬ РАСШИРЕННЫЕ ВОЗМОЖНОСТИ ПОРТАЛА
              — ПОЛУЧЕНИЕ ИГРОВОЙ ВАЛЮТЫ НА БАЛАНС СВОЕГО АККАУНТА.
              <br /><br />6.2. ДОПОЛНИТЕЛЬНЫЕ ПЛАТНЫЕ УСЛУГИ НЕ ЯВЛЯЮТСЯ
              ОБЯЗАТЕЛЬНЫМ УСЛОВИЕМ ИСПОЛЬЗОВАНИЯ ПОРТАЛА И УЧАСТИЯ В ПРОЕКТАХ
              ПОРТАЛА. <br /><br />6.3. С МОМЕНТА СПИСАНИЯ ДЕНЕЖНЫХ СРЕДСТВ
              ОПЕРАТОРОМ ПОРТАЛА СО СЧЕТА ПОЛЬЗОВАТЕЛЯ, ДОПОЛНИТЕЛЬНАЯ ПЛАТНАЯ
              УСЛУГА СЧИТАЕТСЯ ОКАЗАННОЙ В ПОЛНОМ ОБЪЕМЕ, НАДЛЕЖАЩЕГО КАЧЕСТВА.
              <br /><br />6.4. ПОСЛЕ ОКАЗАНИЯ ДОПОЛНИТЕЛЬНОЙ ПЛАТНОЙ УСЛУГИ,
              ДЕНЬГИ, ПОТРАЧЕННЫЕ НА ЕЕ ПРИОБРЕТЕНИЕ, ВОЗВРАТУ НЕ ПОДЛЕЖАТ.
              <br /><br />6.5. ПОЛЬЗОВАТЕЛЬ СОГЛАШАЕТСЯ, ЧТО ОПЕРАТОР ВПРАВЕ
              ХРАНИТЬ ПЕРСОНАЛЬНУЮ ИНФОРМАЦИЮ, ПОЛУЧЕННУЮ ПРИ ПОКУПКЕ
              ДОПОЛНИТЕЛЬНЫХ ПЛАТНЫХ УСЛУГ. <br /><br />6.6. ПЕРЕЧЕНЬ
              ДОПОЛНИТЕЛЬНЫХ ПЛАТНЫХ УСЛУГ И ИХ СТОИМОСТЬ ПУБЛИКУЮТСЯ ТОЛЬКО
              ОПЕРАТОРОМ НА САЙТЕ/ПОРТАЛЕ. ЛЮБАЯ ИНФОРМАЦИЯ И ПРЕДЛОЖЕНИЯ
              ПОКУПКИ ДАННЫХ УСЛУГ НА СТОРОННИХ РЕСУРСАХ, СЧИТАЮТСЯ
              МОШЕННИЧЕСТВОМ, ЗА КОТОРОЕ ОПЕРАТОР ОТВЕТСТВЕННОСТИ НЕ НЕСЕТ.
              <br /><br />6.7. СПОСОБЫ И ВОЗМОЖНОСТЬ ПРИОБРЕТЕНИЯ ДОПОЛНИТЕЛЬНЫХ
              ПЛАТНЫХ УСЛУГ РАЗЪЯСНЯЕТСЯ ОПЕРАТОРОМ НА САЙТЕ. <br /><br />6.8.
              ОПЕРАТОР НЕ ДАЕТ РАЗЪЯСНЕНИЙ ПО ВОПРОСАМ РАБОТЫ С ПЛАТЕЖНЫМИ
              СИСТЕМАМИ, С ПОМОЩЬЮ КОТОРЫХ ПОЛЬЗОВАТЕЛЬ РЕШИЛ ПРИОБРЕСТИ
              ДОПОЛНИТЕЛЬНЫЕ ПЛАТНЫЕ УСЛУГИ, А ТАКЖЕ НЕ НЕСЕТ ОТВЕТСТВЕННОСТИ ЗА
              ИХ КОРРЕКТНУЮ РАБОТУ. <br /><br />6.9. В СЛУЧАЕ ТЕХНИЧЕСКОЙ
              НЕИСПРАВНОСТИ САЙТОВ ИЛИ НАМЕРЕННЫХ ДЕЙСТВИЙ ПОЛЬЗОВАТЕЛЯ, А РАВНО
              И В ДРУГИХ СЛУЧАЯХ, КОГДА ДОПОЛНИТЕЛЬНЫЕ ПЛАТНЫЕ УСЛУГИ БЫЛИ
              ОКАЗАНЫ БЕЗ ПОЛНОГО/ЧАСТИЧНОГО СПИСАНИЯ СРЕДСТВ СО СЧЕТА
              ПОЛЬЗОВАТЕЛЯ, ОН ОБЯЗАН СООБЩИТЬ О ДАННОМ ФАКТЕ ОПЕРАТОРУ. ПОСЛЕ
              ЭТОГО ПОЛЬЗОВАТЕЛЬ ОБЯЗАН ПОГАСИТЬ ВОЗНИКШУЮ ЗАДОЛЖЕННОСТЬ.
              <br /><br />6.10. ОПЕРАТОР НЕ ВОЗМЕЩАЕТ ДЕНЕЖНЫЕ СРЕДСТВА
              ПОЛЬЗОВАТЕЛЮ ЗА НЕИСПОЛЬЗОВАННЫЕ (ИСПОЛЬЗОВАННЫЕ ЧАСТИЧНО)
              ДОПОЛНИТЕЛЬНЫЕ ПЛАТНЫЕ УСЛУГИ. <br /><br />6.11. ПОЛЬЗОВАТЕЛЬ ЗА
              СВОЙ СЧЕТ, САМОСТОЯТЕЛЬНО НЕСЕТ ВСЕ ФИНАНСОВЫЕ РАСХОДЫ, СВЯЗАННЫЕ
              С ПРИОБРЕТЕНИЕМ (ПЕРЕЧИСЛЕНИЕМ ДЕНЕГ) ДОПОЛНИТЕЛЬНЫХ ПЛАТНЫХ
              УСЛУГ. В ДАННЫЙ РАЗДЕЛ ВКЛЮЧЕНЫ: КОМИССИИ, СБОРЫ И ДРУГИЕ РАСХОДЫ.
              <br /><br />6.12. ПОЛЬЗОВАТЕЛЬ ГАРАНТИРУЕТ ОПЕРАТОРУ, ЧТО ИМЕЕТ
              ВСЕ ЗАКОННЫЕ ПОЛНОМОЧИЯ И ПРАВА НА ЗАКЛЮЧЕНИЕ НАСТОЯЩЕГО
              СОГЛАШЕНИЯ В ЧАСТИ ДОПОЛНИТЕЛЬНЫХ ПЛАТНЫХ УСЛУГ. <br /><br />6.13.
              В СЛУЧАЕ ПРИОБРЕТЕНИЯ ДОПОЛНИТЕЛЬНЫХ ПЛАТНЫХ УСЛУГ ПОЛЬЗОВАТЕЛЕМ,
              НЕ ДОСТИГШИМ 18 ЛЕТ, ОН ОБЯЗАН ПРЕДВАРИТЕЛЬНО ПОЛУЧИТЬ СОГЛАСИЕ НА
              ПРОВЕДЕНИЕ ФИНАНСОВОЙ ОПЕРАЦИИ У ЗАКОННЫХ ПРЕДСТАВИТЕЛЕЙ. ФАКТ
              ПОКУПКИ ДОПОЛНИТЕЛЬНЫХ ПЛАТНЫХ УСЛУГ, ЯВЛЯЕТСЯ ПОДТВЕРЖДЕНИЕМ
              ПОЛУЧЕНИЯ ТАКОГО СОГЛАСИЯ У ЗАКОННОГО ПРЕДСТАВИТЕЛЯ. ПРИ
              НЕОБХОДИМОСТИ, ОПЕРАТОР ИМЕЕТ ПРАВО ЗАПРОСИТЬ ПИСЬМЕННОЕ
              ПОДТВЕРЖДЕНИЕ ПОЛУЧЕНИЯ СОГЛАСИЯ И ПРЕДОСТАВЛЕНИЕ ПАСПОРТНЫХ
              ДАННЫХ ДЛЯ ОПРЕДЕЛЕНИЯ ИСТИННОГО ВОЗРАСТА ПОЛЬЗОВАТЕЛЯ.
              <br /><br />6.14. ОТВЕТСТВЕННОСТЬ ЗА ПРИОБРЕТЕНИЕ ДОПОЛНИТЕЛЬНЫХ
              ПЛАТНЫХ УСЛУГ ПОЛНОСТЬЮ ВОЗЛАГАЕТСЯ НА ПОЛЬЗОВАТЕЛЯ И ЕГО ЗАКОННЫХ
              ПРЕДСТАВИТЕЛЕЙ. <br /><br />6.15. СПОРЫ ОБ ОТВЕТСТВЕННОСТИ ЗА
              ПОКУПКУ ДОПОЛНИТЕЛЬНЫХ ПЛАТНЫХ УСЛУГ С ОПЕРАТОРОМ ПОРТАЛА
              НЕДОПУСТИМЫ. <br /><br />
              6.16. ПОЛУЧЕНИЕ ДОПОЛНИТЕЛЬНЫХ ПЛАТНЫХ УСЛУГ ПОЛЬЗОВАТЕЛЕМ
              ВОЗМОЖНО ТОЛЬКО ПОСЛЕ ПОЛНОЙ ОПЛАТЫ ИХ СТОИМОСТИ. 6.17. ПОРЯДОК
              ОПЛАТЫ <br /><br />6.17.1. К ОПЛАТЕ ПРИНИМАЮТСЯ ПЛАТЕЖНЫЕ КАРТЫ:
              VISA, MASTERCARD, MAESTRO, МИР. ДЛЯ ОПЛАТЫ ТОВАРА БАНКОВСКОЙ
              КАРТОЙ ПРИ ОФОРМЛЕНИИ ЗАКАЗА В ИНТЕРНЕТ-МАГАЗИНЕ ПОЛЬЗОВАТЕЛЬ
              ВЫБИРАЕТ СПОСОБ ОПЛАТЫ: БАНКОВСКОЙ КАРТОЙ. ПРИ ОПЛАТЕ ЗАКАЗА
              БАНКОВСКОЙ КАРТОЙ, ОБРАБОТКА ПЛАТЕЖА ПРОИСХОДИТ НА АВТОРИЗАЦИОННОЙ
              СТРАНИЦЕ БАНКА, ГДЕ ПОЛЬЗОВАТЕЛЮ НЕОБХОДИМО ВВЕСТИ ДАННЫЕ СВОЕЙ
              БАНКОВСКОЙ КАРТЫ: <br /><br />1) ТИП КАРТЫ <br /><br />2) НОМЕР
              КАРТЫ, <br /><br />3) СРОК ДЕЙСТВИЯ КАРТЫ <br /><br />4) ИМЯ
              ДЕРЖАТЕЛЯ КАРТЫ (ЛАТИНСКИМИ БУКВАМИ, ТОЧНО ТАКЖЕ КАК УКАЗАНО НА
              КАРТЕ) <br /><br />5) CVC2/CVV2 КОД <br /><br />6.17.2. ЕСЛИ КАРТА
              ПОЛЬЗОВАТЕЛЯ ПОДКЛЮЧЕНА К УСЛУГЕ 3D-SECURE, ОН БУДЕТ АВТОМАТИЧЕСКИ
              ПЕРЕАДРЕСОВАН НА СТРАНИЦУ БАНКА, ВЫПУСТИВШЕГО КАРТУ, ДЛЯ
              ПРОХОЖДЕНИЯ ПРОЦЕДУРЫ АУТЕНТИФИКАЦИИ. ИНФОРМАЦИЮ О ПРАВИЛАХ И
              МЕТОДАХ ДОПОЛНИТЕЛЬНОЙ ИДЕНТИФИКАЦИИ МОЖНО УТОЧНИТЬ В БАНКЕ,
              ВЫДАВШЕМ ПОЛЬЗОВАТЕЛЮ БАНКОВСКУЮ КАРТУ. <br /><br />7. ОТКАЗ ОТ
              ПРЕДОСТАВЛЕНИЯ ГАРАНТИЙ ВСЕ УСЛУГИ НА ПОРТАЛЕ ПРЕДОСТАВЛЯЮТСЯ
              ПОЛЬЗОВАТЕЛЯМ СОГЛАСНО УСТАНОВЛЕННОЙ КОНЦЕПЦИИ “КАК ЕСТЬ”. ПОРТАЛ
              ОТКАЗЫВАЕТСЯ ОТ ПРЕДОСТАВЛЕНИЯ ГАРАНТИЙ ОТНОСИТЕЛЬНО УСЛУГ ИЛИ
              ВИРТУАЛЬНЫХ ЦЕННОСТЕЙ. ОПЕРАТОР НАСТОЯЩИМ ПРЕДУПРЕЖДАЕТ И
              НАПОМИНАЕТ, ЧТО ЧРЕЗМЕРНОЕ ИСПОЛЬЗОВАНИЕ ПК, ВКЛЮЧАЯ ИГРЫ НА ПК,
              МОЖЕТ НАНЕСТИ ВРЕД ЗДОРОВЬЮ ПОЛЬЗОВАТЕЛЯ. ПОЛЬЗОВАТЕЛЬ ИЛИ ЕГО
              ЗАКОННЫЕ ПРЕДСТАВИТЕЛИ, СОГЛАШАЮТСЯ САМОСТОЯТЕЛЬНО КОНТРОЛИРОВАТЬ
              СОСТОЯНИЕ ЗДОРОВЬЯ И НЕ ИСПОЛЬЗОВАТЬ УСЛУГИ /ОГРАНИЧИТЬ ИХ
              ИСПОЛЬЗОВАНИЕ ПРИ НАЛИЧИИ КАКИХ-ЛИБО ПРОТИВОПОКАЗАНИЙ. ОПЕРАТОР НЕ
              НЕСЕТ ОТВЕТСТВЕННОСТИ ЗА ЛЮБЫЕ КОСВЕННЫЕ, СЛУЧАЙНЫЕ ИЛИ ИНЫЕ
              УБЫТКИ (ВКЛЮЧАЯ, ПОМИМО ПРОЧЕГО, УПУЩЕННУЮ ВЫГОДУ) В РЕЗУЛЬТАТЕ
              ИГРОВЫХ УСЛУГ, САЙТОВ ПОРТАЛА И / ИЛИ МАТЕРИАЛОВ НА САЙТЕ,
              ДЕЙСТВИЯ ТРЕТЬИХ СТОРОН, СВЯЗАННЫЕ С УСЛУГАМИ И ПОРТАЛОМ ОПЕРАТОРА
              И / ИЛИ МАТЕРИАЛАМИ НА САЙТЕ, ВКЛЮЧАЯ МОШЕННИЧЕСКИЕ И / ИЛИ
              НЕБРЕЖНЫЕ ДЕЙСТВИЯ ТРЕТЬИХ ЛИЦ. <br /><br />8. ДОПОЛНИТЕЛЬНЫЕ
              ПОЛОЖЕНИЯ <br /><br />8.1. ЕСЛИ ПОЛЬЗОВАТЕЛЬ НЕ ИМЕЕТ ПРАВА
              ИСПОЛЬЗОВАТЬ ПОРТАЛ СОГЛАСНО ЗАКОНОДАТЕЛЬСТВУ ЕГО СТРАНЫ ИЛИ
              СУЩЕСТВУЮТ ИНЫЕ ОГРАНИЧЕНИЯ (ДОПУСК ПО ВОЗРАСТУ И ПРОЧИЕ), ОН
              ОБЯЗАН БЕЗ ПРЕДУПРЕЖДЕНИЯ ОТКАЗАТЬСЯ ОТ ИСПОЛЬЗОВАНИЯ ПОРТАЛА, А
              РАВНО ИХ ОТДЕЛЬНО ВЗЯТЫХ УСЛУГ. ПОЛЬЗОВАТЕЛЬ БЕРЕТ НА СЕБЯ ВСЮ
              ОТВЕТСТВЕННОСТЬ ИСПОЛЬЗОВАНИЯ ПОРТАЛА В СВОЕЙ СТРАНЕ, ОСНОВЫВАЯСЬ
              НА МЕСТНЫХ ЗАКОНАХ И УЧИТЫВАЯ МЕЖДУНАРОДНОЕ ЗАКОНОДАТЕЛЬСТВО.
              <br /><br />8.2. НЕДЕЙСТВИТЕЛЬНОСТЬ ОДНОГО/НЕСКОЛЬКИХ
              ПУНКТОВ/РАЗДЕЛОВ ПОЛЬЗОВАТЕЛЬСКОГО СОГЛАШЕНИЯ, НЕ ВЛЕЧЕТ ЕГО
              НЕДЕЙСТВИТЕЛЬНОСТЬ В ЦЕЛОМ. В ЭТОМ СЛУЧАЕ СТОРОНЫ ДОЛЖНЫ ВЫПОЛНЯТЬ
              ВЗЯТЫЕ НА СЕБЯ ОБЯЗАТЕЛЬСТВА ПО ОСТАЛЬНЫМ ПУНКТАМ/РАЗДЕЛАМ
              СОГЛАШЕНИЯ. <br /><br />8.3. СПОРЫ, ВОЗНИКАЮЩИЕ МЕЖДУ СТОРОНАМИ,
              ПОДЛЕЖАТ ПЕРВОНАЧАЛЬНОМУ УРЕГУЛИРОВАНИЮ В ДОСУДЕБНОМ ПОРЯДКЕ,
              ПУТЕМ ПЕРЕПИСКИ ОПЕРАТОРА И ПОЛЬЗОВАТЕЛЯ. В СЛУЧАЕ НЕЭФФЕКТИВНОСТИ
              МЕДИАТИВНОГО УРЕГУЛИРОВАНИЯ СПОРОВ, ОНИ БУДУТ РЕШАТЬСЯ В
              СООТВЕТСТВИИ С ЗАКОНОДАТЕЛЬСТВОМ ЭСТОНСКОЙ РЕСПУБЛИКИ.
              <br /><br />8.4. НАСТОЯЩЕЕ СОГЛАШЕНИЕ МОЖЕТ ИЗМЕНЯТЬСЯ,
              ДОПОЛНЯТЬСЯ ОПЕРАТОРОМ БЕЗ ПРЕДВАРИТЕЛЬНОГО УВЕДОМЛЕНИЯ
              ПОЛЬЗОВАТЕЛЯ. ЛЮБЫЕ ИЗМЕНЕНИЯ ВСТУПАЮТ В СИЛУ СРАЗУ ПОСЛЕ
              ПУБЛИКАЦИИ ИЗМЕНЕННОЙ РЕДАКЦИИ СОГЛАШЕНИЯ НА САЙТЕ. ЧТОБЫ ИЗБЕЖАТЬ
              ВОЗНИКНОВЕНИЯ СПОРНЫХ ВОПРОСОВ, ПОЛЬЗОВАТЕЛЬ ОБЯЗУЕТСЯ
              САМОСТОЯТЕЛЬНО ОСУЩЕСТВЛЯТЬ ПРОВЕРКУ ТЕКСТА СОГЛАШЕНИЯ НА САЙТЕ,
              ГДЕ ОНО НАХОДИТСЯ В СВОБОДНОМ ДОСТУПЕ. В СЛУЧАЕ НЕВЫПОЛНЕНИЯ
              ПРОВЕРКИ ТЕКСТА СОГЛАШЕНИЯ СО СТОРОНЫ ПОЛЬЗОВАТЕЛЯ, ДАННЫЙ ФАКТ НЕ
              МОЖЕТ СЛУЖИТЬ ОСНОВАНИЕМ ДЛЯ ОТКАЗА ИСПОЛНЕНИЯ ВЗЯТЫХ НА СЕБЯ
              ОБЯЗАТЕЛЬСТВ. ИЗМЕНЕННАЯ РЕДАКЦИЯ СОГЛАШЕНИЯ ПОСЛЕ ПУБЛИКАЦИИ НА
              САЙТЕ ИМЕЕТ АНАЛОГИЧНУЮ ЮРИДИЧЕСКУЮ СИЛУ С ПЕРВОНАЧАЛЬНЫМ ТЕКСТОМ.
              <br /><br />9. КОНТАКТНАЯ ИНФОРМАЦИЯ КОНТАКТНЫЙ EMAIL:
              rbxmarket@gmail.com Beneficiary: INTERNATIONAL BUSINESS SYSTEMS
              S.R.L. Reg. number: 3-102-693823 Beneficiary's address: SAN
              JOSE-SANTA ANA,THREE HUNDRED AND FIFTY METERS OF THE RESTAURANT
              CEVICHE DEL REY, COSTA-RICA
            </span>
          </div>
        </div>
        <div>
          <button id="close" class="pink_button absolute px-[11px] py-[6px]">
            X
          </button>
        </div>
      </div>
    </div>
    <div class="modal" id="PrivacyPolicy">
      <div class="modal_content overflow-scroll max-w-[385px] max-h-[391px]">
        <div>
          <span class="text-white font-semibold text-base">
            СОГЛАШЕНИЕ ОБ УСЛОВИЯХ ПОЛЬЗОВАНИЯ ИНФОРМАЦИИ — КОМПАНИИ
            RBXMARKET.IO
          </span>
          <div class="mt-4">
            <span class="text-gray">
              настоящая политика конфиденциальности персональных данных (далее –
              политика конфиденциальности) действует в отношении всей
              информации, которую торговая площадка «rbxmarket.io»,
              расположенный на доменном имени www.rbxmarket.io , может получить
              о пользователе во время использования сайта интернет-магазина,
              программ и продуктов интернет-магазина. 1. определение терминов
              1.1.1. «администрация сайта торговой площадки (далее –
              администрация сайта) » – уполномоченные сотрудники на управление
              сайтом, действующие от имени rbxmarket.io, которые организуют и
              (или) осуществляет обработку персональных данных, а также
              определяет цели обработки персональных данных, состав персональных
              данных, подлежащих обработке, действия (операции), совершаемые с
              персональными данными. 1.1.2. «персональные данные» - любая
              информация, относящаяся к прямо или косвенно определенному или
              определяемому физическому лицу (субъекту персональных данных).
              1.1.3. «обработка персональных данных» - любое действие (операция)
              или совокупность действий (операций), совершаемых с использованием
              средств автоматизации или без использования таких средств с
              персональными данными, включая сбор, запись, систематизацию,
              накопление, хранение, уточнение (обновление, изменение),
              извлечение, использование, передачу (распространение,
              предоставление, доступ), обезличивание, блокирование, удаление,
              уничтожение персональных данных. 1.1.4. «конфиденциальность
              персональных данных» - обязательное для соблюдения оператором или
              иным получившим доступ к персональным данным лицом требование не
              допускать их распространения без согласия субъекта персональных
              данных или наличия иного законного основания. 1.1.5. «пользователь
              сайта (далее ‑ пользователь)» – лицо, имеющее доступ к сайту,
              посредством сети интернет и использующее сайт. 1.1.6. «cookies» —
              небольшой фрагмент данных, отправленный веб-сервером и хранимый на
              компьютере пользователя, который веб-клиент или веб-браузер каждый
              раз пересылает веб-серверу в http-запросе при попытке открыть
              страницу соответствующего сайта. 1.1.7. «ip-адрес» — уникальный
              сетевой адрес узла в компьютерной сети, построенной по протоколу
              ip. 2. общие положения 2.1. использование пользователем сайта
              интернет-магазина означает согласие с настоящей политикой
              конфиденциальности и условиями обработки персональных данных
              пользователя. 2.2. в случае несогласия с условиями политики
              конфиденциальности пользователь должен прекратить использование
              сайта. 2.3. настоящая политика конфиденциальности применяется
              только к сайту rbxmarket.io. сайт не контролирует и не несет
              ответственность за сайты третьих лиц, на которые пользователь
              может перейти по ссылкам, доступным на сайте. 2.4. администрация
              сайта не проверяет достоверность персональных данных,
              предоставляемых пользователем сайта. 2.5. оплата заказа возможна
              банковскими картами visa, mastercard, «мир» или через платежные
              системы apple pay, яндекс.деньги, qiwi или paypal (последняя —
              только для покупателей из-за пределов российской федерации). чтобы
              оплатить покупку, вы будете перенаправлены на сервер платежной
              системы, на котором нужно ввести необходимые данные. при оплате
              банковской картой безопасность платежей гарантирует процессинговый
              центр. платёжная система обладает подтвержденным сертификатом
              соответствия требованиям стандарта pci dss в части хранения,
              обработки и передачи данных держателей карт. стандарт безопасности
              банковских карт pci dss поддерживается международными платежными
              системами, включая mastercard и visa, inc. система также является
              участником программы непрерывного соответствия compliance control
              pci dss compliance process (p.d.c.p.). ваши конфиденциальные
              данные, необходимые для оплаты (реквизиты карты, регистрационные
              данные и др.), не поступают в интернет-магазин — их обработка
              производится на стороне процессингового центра и полностью
              защищена." 3. предмет политики конфиденциальности 3.1. настоящая
              политика конфиденциальности устанавливает обязательства
              администрации сайта торговой-площадки по неразглашению и
              обеспечению режима защиты конфиденциальности персональных данных,
              которые пользователь предоставляет по запросу администрации сайта
              при регистрации или при оформлении заказа для приобретения товара.
              3.2. персональные данные, разрешённые к обработке в рамках
              настоящей политики конфиденциальности, предоставляются
              пользователем путём заполнения регистрационной формы на сайте
              rbxmarket.io в разделе название раздела и включают в себя
              следующую информацию: 3.2.1. фамилию, имя пользователя 3.2.2.
              адрес электронной почты (e-mail) 3.2.3. фамилия, имя пользователя,
              полученные при авторизации через социальные сети 3.3. торговая
              площадка защищает данные, которые автоматически передаются в
              процессе просмотра рекламных блоков и при посещении страниц: · ip
              адрес; · информация из cookies; · информация о браузере (или иной
              программе, которая осуществляет доступ к показу рекламы); · время
              доступа; · адрес страницы, на которой расположен рекламный блок; ·
              реферер (адрес предыдущей страницы). 3.3.1. отключение cookies
              может повлечь невозможность доступа к частям сайта, требующим
              авторизации. 3.3.2. торговая площадка осуществляет сбор статистики
              об ip-адресах своих посетителей. данная информация используется с
              целью выявления и решения технических проблем, для контроля
              законности проводимых финансовых платежей. 3.4. любая иная
              персональная информация не оговоренная выше (история покупок,
              используемые браузеры и операционные системы и т.д.) подлежит
              надежному хранению и нераспространению, за исключением случаев,
              предусмотренных в п.п. 5.2. и 5.3. настоящей политики
              конфиденциальности. 4. цели сбора персональной информации
              пользователя 4.1. персональные данные пользователя администрация
              сайта может использовать в целях: 4.1.1. идентификации
              пользователя, зарегистрированного на сайте, для оформления заказа
              дистанционным способом с rbxmarket.io . 4.1.2. предоставления
              пользователю доступа к персонализированным ресурсам сайта. 4.1.3.
              установления с пользователем обратной связи, включая направление
              уведомлений, запросов, касающихся использования сайта, оказания
              услуг, обработка запросов и заявок от пользователя. 4.1.4.
              подтверждения достоверности и полноты персональных данных,
              предоставленных пользователем. 4.1.5. создания учетной записи для
              совершения покупок, если пользователь дал согласие на создание
              учетной записи. 4.1.6. уведомления пользователя сайта о состоянии
              платежа. 4.1.7. обработки и получения платежей, оспаривания
              платежа. 4.1.8. предоставления пользователю эффективной клиентской
              и технической поддержки при возникновении проблем связанных с
              использованием сайта 4.1.9. предоставления доступа пользователю на
              сайты или сервисы партнеров с целью получения продуктов,
              обновлений и услуг. 5. способы и сроки обработки персональной
              информации 5.1. обработка персональных данных пользователя
              осуществляется без ограничения срока, любым законным способом, в
              том числе в информационных системах персональных данных с
              использованием средств автоматизации или без использования таких
              средств. 5.2. пользователь соглашается с тем, что администрация
              сайта вправе передавать персональные данные третьим лицам, в
              частности платёжным системам, через которые пользователь совершал
              оплату заказа. 5.3. персональные данные пользователя могут быть
              переданы уполномоченным органам государственной власти в порядке,
              установленным законодательством эстонской республики. 5.4. при
              утрате или разглашении персональных данных администрация сайта
              информирует пользователя об утрате или разглашении персональных
              данных. 5.5. администрация сайта принимает необходимые
              организационные и технические меры для защиты персональной
              информации пользователя от неправомерного или случайного доступа,
              уничтожения, изменения, блокирования, копирования,
              распространения, а также от иных неправомерных действий третьих
              лиц. 5.6. администрация сайта совместно с пользователем принимает
              все необходимые меры по предотвращению убытков или иных
              отрицательных последствий, вызванных утратой или разглашением
              персональных данных пользователя. 6. обязательства сторон 6.1.
              пользователь обязан: 6.1.1. предоставить информацию о персональных
              данных, необходимую для пользования сайтом. 6.1.2. обновить,
              дополнить предоставленную информацию о персональных данных в
              случае изменения данной информации. 6.2. администрация сайта
              обязана: 6.2.1. использовать полученную информацию исключительно
              для целей, указанных в п. 4 настоящей политики конфиденциальности.
              6.2.2. обеспечить хранение конфиденциальной информации в тайне, не
              разглашать без предварительного письменного разрешения
              пользователя, а также не осуществлять продажу, обмен,
              опубликование, либо разглашение иными возможными способами
              переданных персональных данных пользователя, за исключением п.п.
              5.2. и 5.3. настоящей политики конфиденциальности. 6.2.3.
              принимать меры предосторожности для защиты конфиденциальности
              персональных данных пользователя согласно порядку, обычно
              используемого для защиты такого рода информации в существующем
              деловом обороте. 6.2.4. осуществить блокирование персональных
              данных, относящихся к соответствующему пользователю, с момента
              обращения или запроса пользователя или его законного представителя
              либо уполномоченного органа по защите прав субъектов персональных
              данных на период проверки, в случае выявления недостоверных
              персональных данных или неправомерных действий. 7. ответственность
              сторон 7.1. администрация сайта, не исполнившая свои
              обязательства, несёт ответственность за убытки, понесенные
              пользователем в связи с неправомерным использованием персональных
              данных, в соответствии с законодательством эстонской республики.
              7.2. в случае утраты или разглашения конфиденциальной информации
              администрация сайта не несёт ответственность, если данная
              конфиденциальная информация: 7.2.1. стала публичным достоянием до
              её утраты или разглашения. 7.2.2. была получена от третьей стороны
              до момента её получения администрацией сайта. 7.2.3. была
              разглашена с согласия пользователя. 8. разрешение споров 8.1. до
              обращения в суд с иском по спорам, возникающим из отношений между
              пользователем сайта и администрацией сайта, обязательным является
              предъявление претензии (письменного предложения о добровольном
              урегулировании спора). 8.2. получатель претензии в течение 30
              календарных дней со дня получения претензии, письменно уведомляет
              заявителя претензии о результатах рассмотрения претензии. 8.3. при
              недостижении соглашения спор может быть передан на рассмотрение в
              судебный орган в соответствии с действующим законодательством
              эстонской республики 9. дополнительные условия 9.1. администрация
              сайта вправе вносить изменения в настоящую политику
              конфиденциальности без согласия пользователя. 9.2. новая политика
              конфиденциальности вступает в силу с момента ее размещения на
              сайте, если иное не предусмотрено новой редакцией политики
              конфиденциальности. 9.3. действующая политика конфиденциальности
              размещена на странице по адресу https://rbxmarket.io/policy
            </span>
          </div>
        </div>
        <div>
          <button id="close" class="pink_button absolute px-[11px] py-[6px]">
            X
          </button>
        </div>
      </div>
    </div>
    <div class="modal" id="Purchases">
      <div
        class="modal_content overflow-scroll py-6 max-w-[385px] max-h-[391px]"
      >
        <div class="flex flex-col">
          <span class="text-white font-semibold text-2xl">Мои покупки</span>
          <span class="text-gray font-medium text-base mt-3">
            Введите свой игровой никнейм, чтобы просмотреть историю ваших
            транзакций
          </span>
          <input
            type="text"
            placeholder="Введите никнейм..."
            class="bg-second px-4 py-3 text-lg text-gray font-normal w-full rounded-xl mt-4"
          />
          <div class="px-4 py-2 bg-bg mt-3 rounded-xl flex gap-3 relative">
            <img src="/assets/img/avatar.png" alt="" />
            <div class="flex flex-col">
              <span class="text-gray font-bold text-base">Никнейм</span>
              <span class="text-white font-bold text-base">HisUser</span>
            </div>
            <div class="absolute right-[10px] top-[10px]">
              <svg
                class=""
                width="16"
                height="16"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M8 15.5C8.98491 15.5 9.96018 15.306 10.8701 14.9291C11.7801 14.5522 12.6069 13.9997 13.3033 13.3033C13.9997 12.6069 14.5522 11.7801 14.9291 10.8701C15.306 9.96018 15.5 8.98491 15.5 8C15.5 7.01509 15.306 6.03982 14.9291 5.12987C14.5522 4.21993 13.9997 3.39314 13.3033 2.6967C12.6069 2.00026 11.7801 1.44781 10.8701 1.0709C9.96018 0.693993 8.98491 0.5 8 0.5C6.01088 0.5 4.10322 1.29018 2.6967 2.6967C1.29018 4.10322 0.5 6.01088 0.5 8C0.5 9.98912 1.29018 11.8968 2.6967 13.3033C4.10322 14.7098 6.01088 15.5 8 15.5ZM11.9733 6.03333C12.0465 5.9497 12.1022 5.85228 12.1372 5.74681C12.1721 5.64133 12.1856 5.52993 12.1769 5.41915C12.1682 5.30838 12.1374 5.20047 12.0863 5.10177C12.0353 5.00308 11.965 4.91559 11.8796 4.84445C11.7943 4.77332 11.6955 4.71997 11.5892 4.68755C11.483 4.65514 11.3713 4.6443 11.2607 4.65569C11.1502 4.66708 11.0431 4.70046 10.9456 4.75386C10.8482 4.80727 10.7624 4.87962 10.6933 4.96667L7.695 8.56417C7.40583 8.91083 7.24333 9.10333 7.11417 9.22083L7.10917 9.22583L7.10333 9.22167C6.96333 9.11583 6.78417 8.93917 6.46583 8.62L5.25583 7.41083C5.09866 7.25904 4.88816 7.17504 4.66967 7.17694C4.45117 7.17884 4.24216 7.26648 4.08765 7.42098C3.93314 7.57549 3.8455 7.7845 3.8436 8.003C3.84171 8.2215 3.9257 8.432 4.0775 8.58917L5.28667 9.79833L5.32083 9.8325C5.59333 10.105 5.85417 10.3667 6.09833 10.5508C6.37083 10.7575 6.72833 10.9508 7.18583 10.9308C7.64417 10.91 7.9825 10.6842 8.23583 10.4542C8.46083 10.2483 8.69833 9.96417 8.94417 9.66833L8.975 9.63167L11.9733 6.03333Z"
                  fill="#FF00F5"
                ></path>
              </svg>
            </div>
          </div>

          <button class="pink_button py-3 text-base mt-4">
            Посмотреть покупки
          </button>
        </div>
        <div>
          <button id="close" class="pink_button absolute px-[11px] py-[6px]">
            X
          </button>
        </div>
      </div>
    </div>
    <div class="modal" id="Authorization">
      <div
        class="modal_content overflow-scroll max-w-[385px] py-8 max-h-[391px]"
      >
        <div class="flex flex-col">
          <span class="text-white font-semibold text-2xl">Авторизация</span>
          <span class="text-gray font-medium text-base mt-3">
            Введите свой игровой никнейм, чтобы войти в свой аккаунт.
          </span>
          <input
            type="text"
            placeholder="Введите никнейм..."
            id="nickname"
            class="bg-second px-4 py-3 text-lg text-gray font-normal w-full rounded-xl mt-4"
          />
          <div>
            <button
              id="last_nickname"
              data-value="HisUser"
              class="bg-purple-light mt-2 rounded-xl text-purple items-center h-fit py-1 px-5 hover:opacity-50 transition-all flex gap-2"
            >
              HisUser
            </button>
          </div>
          <script>
            document
              .getElementById("last_nickname")
              .addEventListener("click", function () {
                document.getElementById("nickname").value =
                  this.getAttribute("data-value");
              });
          </script>
          <button class="pink_button py-3 text-base mt-4">
            Посмотреть покупки
          </button>
        </div>
        <div>
          <button id="close" class="pink_button absolute px-[11px] py-[6px]">
            X
          </button>
        </div>
      </div>
    </div>
    <script src="/assets/js/modal.js"></script>
  </body>
</html>
