<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Главная</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <link rel="stylesheet" href="{{ asset("/assets/css/tailwind.css") }}" />
      <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}" />
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
                fill="#FF00F5"
              />
            </svg>
            <span class="nav-bar__item active">Купить робуксы</span></a
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
                fill="#252729"
              />
            </svg>
            <span class="nav-bar__item">FAQ</span></a
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
    <main class="mt-32 flex justify-center flex-col items-center gap-5">
      <div
        class="bg-primary max-w-[720px] flex flex-col w-full h-full rounded-xl"
      >
        <div class="px-9 py-5 flex flex-col rounded-t-xl">
          <div
            class="bg-second p-[2px] flex rounded-xl max-w-[420px] items-center flex-grow"
          >
            <div
              class="bg-primary flex gap-2 items-center px-10 py-2 rounded-xl"
            >
              <svg
                width="13"
                height="13"
                viewBox="0 0 13 13"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M6.5 0C5.64641 0 4.80117 0.168127 4.01256 0.494783C3.22394 0.821439 2.50739 1.30023 1.90381 1.90381C0.684819 3.12279 0 4.77609 0 6.5C0 8.22391 0.684819 9.87721 1.90381 11.0962C2.50739 11.6998 3.22394 12.1786 4.01256 12.5052C4.80117 12.8319 5.64641 13 6.5 13C8.22391 13 9.87721 12.3152 11.0962 11.0962C12.3152 9.87721 13 8.22391 13 6.5C13 5.64641 12.8319 4.80117 12.5052 4.01256C12.1786 3.22394 11.6998 2.50739 11.0962 1.90381C10.4926 1.30023 9.77606 0.821439 8.98744 0.494783C8.19883 0.168127 7.35359 0 6.5 0ZM9.23 9.23L5.85 7.15V3.25H6.825V6.63L9.75 8.385L9.23 9.23Z"
                  fill="white"
                />
              </svg>
              <span class="text-white font-medium text-xl">GamePass</span>
            </div>
            <div class="flex gap-3 items-center px-10 py-2">
              <svg
                width="13"
                height="15"
                viewBox="0 0 13 15"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0 15V10.4188C0 10.1611 0.0644583 9.91624 0.193375 9.68428C0.322292 9.45232 0.501583 9.26546 0.73125 9.12371L1.625 8.56314C1.71979 9.64562 1.86875 10.567 2.07187 11.3273C2.275 12.0876 2.59323 12.9317 3.02656 13.8595L0 15ZM4.24531 13.4536C3.77135 12.6031 3.41927 11.701 3.18906 10.7474C2.95885 9.79381 2.84375 8.80799 2.84375 7.78995C2.84375 6.17912 3.17904 4.66186 3.84962 3.23814C4.52021 1.81443 5.40367 0.735052 6.5 0C7.59687 0.734536 8.4806 1.81392 9.15119 3.23814C9.82177 4.66237 10.1568 6.17964 10.1562 7.78995C10.1562 8.7951 10.0411 9.77139 9.81094 10.7188C9.58073 11.6662 9.22864 12.5778 8.75469 13.4536H4.24531ZM6.5 8.04124C6.94687 8.04124 7.32956 7.88995 7.64806 7.58737C7.96656 7.28479 8.12554 6.92062 8.125 6.49484C8.125 6.06959 7.96602 5.70567 7.64806 5.40309C7.3301 5.10052 6.94742 4.94897 6.5 4.94845C6.05312 4.94845 5.67071 5.1 5.35275 5.40309C5.03479 5.70619 4.87554 6.0701 4.875 6.49484C4.875 6.9201 5.03425 7.28428 5.35275 7.58737C5.67125 7.89046 6.05367 8.04175 6.5 8.04124ZM13 15L9.97344 13.8595C10.4068 12.9317 10.725 12.0876 10.9281 11.3273C11.1312 10.567 11.2802 9.64562 11.375 8.56314L12.2687 9.12371C12.499 9.26546 12.6785 9.45232 12.8074 9.68428C12.9364 9.91624 13.0005 10.1611 13 10.4188V15Z"
                  fill="white"
                  fill-opacity="0.6"
                />
              </svg>
              <span class="text-gray font-medium text-xl"> FastPass </span>
            </div>
            <span
              class="px-2 py-1 bg-pink font-semibold text-lg text-white rounded-xl relative top-[-26px] right-[71px]"
            >
              Недоступно
            </span>
          </div>
          <div class="flex flex-grow mt-5 justify-between">
            <div class="flex flex-col gap-2">
              <span class="text-white font-semibold text-lg">
                Ты платишь:
              </span>
              <div class="p-6 bg-second rounded-xl flex">
                <input
                  type="text"
                  name="input"
                  value="100"
                  class="bg-second text-white font-semibold text-2xl max-w-[230px]"
                />
                <span class="currency text-pink font-semibold text-2xl"
                  >Руб</span
                >
              </div>
              <ul class="prices">
                <li data-price="500">500 Р</li>
                <li data-price="1000">1000 Р</li>
              </ul>
            </div>
            <div class="flex flex-col gap-2">
              <span class="text-white font-semibold text-lg">
                Ты получаешь:
              </span>
              <div class="p-6 bg-second rounded-xl flex">
                <input
                  type="text"
                  name="output"
                  value="200"
                  class="bg-second text-white font-semibold text-2xl max-w-[230px]"
                />
                <span class="currency text-pink font-semibold text-2xl"
                  >R$</span
                >
              </div>
              <ul class="prices">
                <li data-price="1000 R">1,000 R$</li>
                <li data-price="2000 R">2,000 R$</li>
              </ul>
            </div>
          </div>
          <button onclick="openCreateTransaction('modalBuyRobux')"
            class="pink_button px-[25px] py-4 mt-8 max-w-[195px] text-base"
          >
            Купить робуксы
          </button>
         
          <span class="text-gray font-medium text-base mt-5"
            >Доставка робуксов этим методом занимает 5-7 дней. Это правило
            Roblox и мы никак не можем на это повлиять. Купить робуксы можно с
            любого устройства.</span
          >
        </div>
        <div class="border-t-2 rounded-b-xl p-9 flex justify-between">
          <span class="text-gray font-medium text-lg"> В наличии: </span>
          <span class="text-pink font-medium text-lg"> {{$robuxSpent}} R$ </span>
        </div>
      </div>
      <div class="flex justify-start w-full max-w-[720px]">
        <div class="pb-2 flex gap-2 items-center">
          <svg
            width="13"
            height="14"
            viewBox="0 0 13 14"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M6.5 0.5C5.64641 0.5 4.80117 0.668127 4.01256 0.994783C3.22394 1.32144 2.50739 1.80023 1.90381 2.40381C0.684819 3.62279 0 5.27609 0 7C0 8.72391 0.684819 10.3772 1.90381 11.5962C2.50739 12.1998 3.22394 12.6786 4.01256 13.0052C4.80117 13.3319 5.64641 13.5 6.5 13.5C8.22391 13.5 9.87721 12.8152 11.0962 11.5962C12.3152 10.3772 13 8.72391 13 7C13 6.14641 12.8319 5.30117 12.5052 4.51256C12.1786 3.72394 11.6998 3.00739 11.0962 2.40381C10.4926 1.80023 9.77606 1.32144 8.98744 0.994783C8.19883 0.668127 7.35359 0.5 6.5 0.5ZM9.23 9.73L5.85 7.65V3.75H6.825V7.13L9.75 8.885L9.23 9.73Z"
              fill="#FFDEFE"
            />
          </svg>
          <span class="text-pink-light font-semibold">Последние покупки</span>
        </div>
      </div>

      <div class="last-buys__buy">
        @foreach ($transactionsLast4 as $transaction)
        <div class="flex gap-3 items-center">
          <img
            src="{{ $transaction->avatar }}"
            alt=""
            class="rounded-full w-[50px] h-[50px]"
          />
          <div class="flex flex-col">
            <span class="text-white font-medium text-lg max-w-[70px] overflow-hidden text-ellipsis whitespace-nowrap">{{ $transaction->username }}</span>
            <span class="text-gray font-medium text-base">{{ $transaction->sumRobux }} R$</span>
          </div>
        </div>
        @endforeach
      
        
        
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
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAmsAAAHWCAYAAAAo8M7SAAAACXBIWXMAADXUAAA11AFeZeUIAAAFyWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgOS4wLWMwMDAgNzkuMTcxYzI3ZiwgMjAyMi8wOC8xNi0xODowMjo0MyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDI0LjAgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMy0xMi0yNVQxNzoxOTowOCswMjowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTItMjVUMTc6MTk6MzIrMDI6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjMtMTItMjVUMTc6MTk6MzIrMDI6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOmQ3ZWNlZDcwLTg2NzAtZTk0ZS1iYTUzLWFhMDQ2ODk0ZTIzNSIgeG1wTU06RG9jdW1lbnRJRD0i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"
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
            <li>Купить робуксы</li>
            <li>Отзывы</li>
            <li>Мои покупки</li>
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
    <div class="modal hidden" id="TermsOfUses">
      <div class="modal_content max-w-[690px] max-h-[690px] overflow-scroll">
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
    <div class="modal hidden" id="PrivacyPolicy">
      <div class="modal_content max-w-[690px] max-h-[690px] overflow-scroll">
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
    <div class="modal" id="modalBuyRobux">
      <div class="modal_content max-w-[690px] h-[532px] pr-3">
        <div class="flex py-9">
          <div class="content flex flex-col active">
            <div class="flex gap-3 items-center">
              <svg
                width="15"
                height="15"
                viewBox="0 0 15 15"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M7.5 0C8.49456 0 9.44839 0.395088 10.1517 1.09835C10.8549 1.80161 11.25 2.75544 11.25 3.75C11.25 4.74456 10.8549 5.69839 10.1517 6.40165C9.44839 7.10491 8.49456 7.5 7.5 7.5C6.50544 7.5 5.55161 7.10491 4.84835 6.40165C4.14509 5.69839 3.75 4.74456 3.75 3.75C3.75 2.75544 4.14509 1.80161 4.84835 1.09835C5.55161 0.395088 6.50544 0 7.5 0ZM7.5 9.375C11.6438 9.375 15 11.0531 15 13.125V15H0V13.125C0 11.0531 3.35625 9.375 7.5 9.375Z"
                  fill="white"
                />
              </svg>
              <span class="text-white text-xl font-semibold"> Аккаунт </span>
            </div>
            <span class="text-gray font-normal text-base mb-8">
              Укажите аккаунт, на который будут отправлены приобретенные робуксы
            </span>
            <div class="flex h-full gap-14">
              <div class="flex flex-col justify-between gap-2">
                <div class="flex flex-col">
                  <span class="text-white font-semibold text-sm mb-3"
                    >Никнейм</span
                  >
                  <div class="input_block px-3 py-4 bg-bg rounded-xl">
                    <input
                      type="text" name="nickname" id="nickname"
                      placeholder="Введите никнейм"
                      class="bg-bg max-w-[260px] text-gray font-semibold text-xl"
                    />
                  </div>
                </div>
                <div>
                  <button
                    name="next"
                    class="pink_button text-[15px] font-bold px-7 py-4"
                  >
                    Продолжить
                  </button>
                </div>
              </div>
              <div class="flex flex-wrap w-full justify-center items-center m-[7px] rounded-[50px] overflow-hidden" id="user_accounts">
                
              </div>
            </div>
            
            <script>
              const nicknameInput = document.querySelector("#nickname");
              var user_accounts = document.querySelector("#user_accounts");
              nicknameInput.addEventListener("change", (e) => {
                user_accounts.innerHTML = "<div class='loading'></div>";

                $.ajax({
                  url: "{{ route("api.getRobloxAccounts") }}",
                  type: "POST",
                  data: {
                    _token: "{{ csrf_token() }}",
                    nickname: e.target.value,
                  },
                  success: function (data) {
                    console.log(data)
                    if(data.status){
                      user_accounts.innerHTML = "";
                      data.users.forEach((element) => {
                        var image = element.image;
                        if(image == null){
                          image = "/assets/img/avatar.png";
                        }
                        console.log(element)
                        user_accounts.innerHTML += `
                        <div class="user_account" data-nickname="${element.Name}" data-userid="${element.UserId}" data-avatar="${image}">
                          <img src="${image}" alt="" />
                          <span class=""> ${element.Name} </span>
                          <svg
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
                    />
                  </svg>
                        </div>
                      `;
                    });
                    const userAccounts = document.querySelectorAll(".user_account");

            userAccounts.forEach((userAccount) => {
              userAccount.addEventListener("click", () => {
                userAccounts.forEach((userAccount) => {
                  userAccount.classList.remove("active");
                });
                userAccount.classList.add("active");
              });
            });
                    }
                    
                  },
                })
              });
            </script>
          </div>
          <div class="content flex flex-col">
            <div class="flex gap-3 items-center">
              <svg
                width="18"
                height="15"
                viewBox="0 0 18 15"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9 0C8.58462 0 8.44615 0.272727 8.16923 0.545455L0.138462 13.5C3.09486e-08 13.6364 0 13.9091 0 14.0455C0 14.7273 0.553846 15 0.969231 15H17.0308C17.5846 15 18 14.7273 18 14.0455C18 13.7727 18 13.7727 17.8615 13.5L9.96923 0.545455C9.69231 0.272727 9.41539 0 9 0ZM9 2.04545L13.5692 9.54545H12.4615L10.3846 7.5L9 9.54545L7.61539 7.5L5.53846 9.54545H4.29231L9 2.04545Z"
                  fill="white"
                />
              </svg>
              <span class="text-white text-xl font-semibold"> Place </span>
            </div>
            <span class="text-gray font-normal text-base mb-8">
              Чтобы пройти дальше нужно выбрать один из предложенных плейсов
            </span>
            <div class="places">
              
            </div>
              
            <button
              name="next"
              class="pink_button max-w-[160px] text-[15px] font-bold px-7 py-4"
            >
              Продолжить
            </button>
          </div>
          <div class="content flex flex-col">
            <div class="flex gap-3 items-center">
              <svg
                width="16"
                height="19"
                viewBox="0 0 16 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <rect
                  y="0.5"
                  width="16"
                  height="18"
                  fill="url(#pattern0_190_929)"
                />
                <defs>
                  <pattern
                    id="pattern0_190_929"
                    patternContentUnits="objectBoundingBox"
                    width="1"
                    height="1"
                  >
                    <use
                      xlink:href="#image0_190_929"
                      transform="matrix(0.000549585 0 0 0.00048852 -0.017434 0)"
                    />
                  </pattern>
                  <image
                    id="image0_190_929"
                    width="1883"
                    height="2047"
                    xlink:href="data:image/png;base64,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2krnGi8CAAD7OFBb6VyrigAAwD4O1FY6l2/pAADs40BtxbgDAMA+DrUVhsLNJQAAaiuoraitAACoraitMBQrigAAoCuNFQFqK/1htAgAALrSGBGgtqK2AgBgHwdqK8YdAABD4GoraitqKwAA9nGgtjLSVhABAEBXcrUVtZU+4Vs6AAD7OFBbcdwBANBi7ppjBPi2BGAkfSwXCgG6wEvyGSEAqK0A/ejGcpEQoPM1L5cBwMhxsyYAAABqKwAAAKitAAAAqK0AAACgtgIAAIDaCgAAgNoKAAAAaisAAABqKwAAAKitAAAAoLYCAACgtgIAAIDaCgAAgNoKAAAAaisAAACorQAAAKitAAAAoLYCAACgtgIAAIDaCgAAAGorAAAAaisAAACorQAAAKitAAAAoLYCAACA2goAAIDaCgAAAGorAAAAaisAAACorQAAAKC2AgAAoLYCAACA2goAAIDaCgAAAGorAAAAqK0AAACorQAAAKC2AgAAoLYCAACA2goAAABqKwAAAGorAAAAqK0AAACorQAAAKC2AgAAgNoKAACA2goAAABqKwAAAGorAAAAqK0AAACgtgIAAKC2AgAAgNoKAACA2goAAABqKwAAAKitAAAAqK0AAACgtgIAAKC2AgAAgNoKAAAAaisAAABqKwAAAKitAAAAqK0AAACgtgIAAIDaCgAAgNoKAAAAaisAAABqKwAAAKitAAAAoLYCAACgtgIAAIDaCgAAgNoKAAAAaisAAACorQAAAKitAAAAoLYCAACgtgIAAIDaCgAAAGorAAAAaisAAACorQAAAKitAAAAoLYCAACA2goAAIDaCgAAAGorAAAAaisAAACorQAAAKC2AgAAoLYCAACA2goAAIDaCgAAAGorAAAAqK0AAACorQAAAKC2AgAAoLYCAACA2goAAABqKwAAAGorAAAAqK0AAACorQAAAKC2AgAAgNoKAACA2goAAABqKwAAAGorAAAAqK0AAACgtgIAAKC2AgAAgNoKAACA2goAAABqKwAAAKitAAAAqK0AAACgtgIAAKC2AgAAgNoKAAAAaisAAABqKwAAAKitAAAAqK0AAACgtgIAAIDaCgAAgNoKAAAAaisAAABqKwAAAKitAAAAoLYCAACgtgIAAIDaCgAAgNoKAAAAaisAAACorQAAAKitAAAAoLYCAACgtgIAAIDaCgAAAGorAAAAaisAAACorQAAAKitAAAAoLYCAACA2goAAIDaCgAAAGorAAAAaisAAACorQAAAKC2AgAAoLYCAACA2goAAIDaCgAAAGorAAAAqK0AAACorQAAAKC2AgAAoLYCAACA2goAAABqKwAAAGorAAAAqK0AAACorQAAAKC2AgAAgNoKAACA2goAAABqKwAAAGorAAAAqK0AAACgtgIAAKC2AgAAgNoKAACA2goAAABqKwAAAKitAAAAqK0AAACgtgIAAKC2AgAAgNoKAAAAaisAAABqKwAAAKitAAAAqK0AAACgtgIAAIDaCgAAgNoKAAAAaisAAABqKwAAAKitAAAAoLYCAACgtgIAAIDaCgAAgNoKAAAAaisAAACorQAAAKitAAAAoLYCAACgtgIAAIDaCgAAAGorAAAAaisAAACorQAAAKitAAAAoLYCAACA2goAAIDaCgAAAGorAAAAaisAAACorQAAAKC2AgAAoLYCAACA2goAAIDaCgAAAGorAAAAqK0AAACorQAAAKC2AgAAoLYCAACA2goAAABqKwAAAGorAAAAqK0AAACorQAAAKC2AgAAgNoKAACA2goAAABqKwAAAGorAAAAqK0AAACgtgIAAKC2AgAAgNoKAACA2goAAABqKwAAAKitAAAAqK0AAACgtgIAAKC2AgAAgNoKAAAAaisAAABqKwAAAKitAAAAqK0AAACgtgIAAIDaCgAAgNoKAAAAaisAAABqKwAAAKitAAAAoLYCAACgtgIAAIDaCgAAgNoqAgAAANRWAAAAUFsBAABQWwEAAEBtBQAAALUVAAAAtRUAAADUVgAAANRWAAAAUFsBAABAbQUAAEBtBQAAALUVAAAAtRUAAADUVgAAAFBbAQAAUFsBAABAbQUAAEBtBfj/27vPQDurMm3A9wqhg1QpSlHpvQkWUARiJzrOCOpMkFEZGUHIAQlEaiiBUCTnBB0UlVGKOoCViC2CBVB6R5ogHektIY2zvx8zn4pSkpy919nluubHqEBI7v2+z1r32W8BAAC1FQAAANRWAAAA1FYAAABQWwEAAFBbAQAAQG0FAAAAtRUAAAC1FQAAANRWAAAA1FYAAABQWwEAAEBtBQAAQG0FAAAAtRUAAAC1FQAAANRWAAAAUFsBAABQWwEAAEBtBQAAQG0FAAAAtRUAAADUVgAAANRWAAAAUFsBAABQWwEAAEBtBQAAALUVAAAAtRUAAADUVgAAANRWAAAAUFsBAABAbQUAAEBtBQAAALUVAAAAtRUAAADUVgAAAFBbAQAAUFsBAABAbQUAAEBtBQAAALUVAAAA1FYAAADUVgAAAFBbAQAAUFsBAABAbQUAAAC1FQAAALUVAAAA1FYAAADUVgAAAFBbAQAAQG0FAABAbQUAAAC1FQAAALUVAAAA1FYAAABQWwEAAFBbAQAAQG0FAABAbQUAAAC1FQAAANRWAAAA1FYAAABQWwEAAFBbAQAAQG0FAAAAtRUAAAC1FQAAANRWAAAA1FYAAABQWwEAAEBtBQAAQG0FAAAAtRUAAAC1FQAAANRWAAAAUFsBAABQWwEAAEBtBQAAQG0FAAAAtRUAAADUVgAAANRWAAAAUFsBAABQWwEAAEBtBQAAALUVAAAAtRUAAADUVgAAANRWAAAAUFsBAABAbQUAAEBtBQAAALUVAAAAtRUAAADUVgAAAFBbAQAAUFsBAABAbQUAAEBtBQAAALUVAAAA1FYAAADUVgAAAFBbAQAAUFsBAABAbQUAAAC1FQAAALUVAAAA1FYAAADUVgAAAFBbAQAAQG0FAABAbQUAAAC1FQAAALUVAAAA1FYAAABQWwEAAFBbAQAAQG0FAABAbQUAAAC1FQAAANRWAAAA1FYAAABQWwEAAFBbAQAAQG0FAAAAtRUAAAC1FQAAANRWAAAA1FYAAABQWwEAAEBtBQAAQG0FAAAAtRUAAAC1FQAAANRWAAAAUFsBAABQWwEAAEBtBQAAQG0FAAAAtRUAAADUVgAAANRWAAAAUFsBAABQWwEAAEBtBQAAALUVAAAAtRUAAADUVgAAANRWAAAAUFsBAABAbQUAAEBtBQAAALUVAAAAtRUAAADUVgAAAFBbAQAAUFsBAABAbQUAAEBtBQAAALUVAAAA1FYAAADUVgAAAFBbAQAAUFsBAABAbQUAAAC1FQAAALUVAAAA1FYAAADUVgAAAFBbAQAAQG0FAABAbQUAAAC1FQAAALUVAAAA1FYAAABQWwEAAFBbAQAAQG0FAABAbQUAAAC1FQAAANRWAAAA1FYAAABQWwEAAFBbAQAAQG0FAAAAtRUAAAC1FQAAANRWAAAA1FYAAABQWwEAAEBtBQAAQG0FAAAAtRUAAAC1FQAAANRWAAAAmHcjRQAwjDZqjBIC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"
                  />
                </defs>
              </svg>
              <span class="text-white text-xl font-semibold"> GamePass </span>
            </div>
            <span class="text-gray font-normal text-base mb-8">
              Зайдите на сайт Roblox, вкладку Create, выбирайте плейс и создайте
              геймпасс с ценой <span class="text-pink" id="price3">2789 R$</span> .
            </span>
            <div class="flex flex-col gap-4">
              <video
                src=""
                class="max-w-[370px] max-h-[160px] w-full h-full hidden"
              ></video>
              <div
                class="w-[370px] h-[160px] rounded-xl flex items-center justify-center bg-white"
              >
                video
              </div>
              <span class="text-gray text-sm"> Цена на Pass </span>
              <div class="flex gap-3 mb-5">
                <div
                  class="bg-pink-light5 flex gap-2 p-[6px] rounded-xl  items-center justify-center"
                >
                  <span class="text-pink" id="price4">2789 R$</span>
                  <div id="copy" class="cursor-pointer" data-value="2789">
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 16 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M14.875 0.5H4.875C4.70924 0.5 4.55027 0.565848 4.43306 0.683058C4.31585 0.800269 4.25 0.95924 4.25 1.125V4.25H1.125C0.95924 4.25 0.800269 4.31585 0.683058 4.43306C0.565848 4.55027 0.5 4.70924 0.5 4.875V14.875C0.5 15.0408 0.565848 15.1997 0.683058 15.3169C0.800269 15.4342 0.95924 15.5 1.125 15.5H11.125C11.2908 15.5 11.4497 15.4342 11.5669 15.3169C11.6842 15.1997 11.75 15.0408 11.75 14.875V11.75H14.875C15.0408 11.75 15.1997 11.6842 15.3169 11.5669C15.4342 11.4497 15.5 11.2908 15.5 11.125V1.125C15.5 0.95924 15.4342 0.800269 15.3169 0.683058C15.1997 0.565848 15.0408 0.5 14.875 0.5ZM10.5 14.25H1.75V5.5H10.5V14.25ZM14.25 10.5H11.75V4.875C11.75 4.70924 11.6842 4.55027 11.5669 4.43306C11.4497 4.31585 11.2908 4.25 11.125 4.25H5.5V1.75H14.25V10.5Z"
                        fill="#FF00F5"
                      />
                    </svg>
                  </div>
                </div>

                <script>
                  const copy = document.getElementById("copy");
                  copy.addEventListener("click", () => {
                    navigator.clipboard.writeText(copy.dataset.value);
                  });
                </script>
                <div
                  class="bg-blue-light2 flex gap-2 p-[6px] rounded-xl items-center justify-center"
                >
                  <span class="text-blue-light3">Создать GamePass</span>
                  <div
                    onclick="window.location.href='vk.com'"
                    class="cursor-pointer"
                  >
                    <svg
                      width="14"
                      height="14"
                      viewBox="0 0 14 14"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7 2.35714H2.5C2.36739 2.35714 2.24021 2.40606 2.14645 2.49313C2.05268 2.5802 2 2.69829 2 2.82143V11.1786C2 11.3017 2.05268 11.4198 2.14645 11.5069C2.24021 11.5939 2.36739 11.6429 2.5 11.6429H11.5C11.6326 11.6429 11.7598 11.5939 11.8536 11.5069C11.9473 11.4198 12 11.3017 12 11.1786V7C12 6.75373 12.1054 6.51754 12.2929 6.3434C12.4804 6.16926 12.7348 6.07143 13 6.07143C13.2652 6.07143 13.5196 6.16926 13.7071 6.3434C13.8946 6.51754 14 6.75373 14 7V11.1786C14 11.7943 13.7366 12.3847 13.2678 12.8201C12.7989 13.2554 12.163 13.5 11.5 13.5H2.5C1.83696 13.5 1.20107 13.2554 0.732233 12.8201C0.263392 12.3847 0 11.7943 0 11.1786L0 2.82143C0 2.20575 0.263392 1.61528 0.732233 1.17993C1.20107 0.744578 1.83696 0.5 2.5 0.5L7 0.5C7.26522 0.5 7.51957 0.597831 7.70711 0.771972C7.89464 0.946113 8 1.1823 8 1.42857C8 1.67484 7.89464 1.91103 7.70711 2.08517C7.51957 2.25931 7.26522 2.35714 7 2.35714ZM9.538 0.786929C9.57579 0.702023 9.63987 0.629439 9.72211 0.578363C9.80435 0.527286 9.90106 0.500015 10 0.5H13.5C13.6326 0.5 13.7598 0.548916 13.8536 0.635986C13.9473 0.723057 14 0.841149 14 0.964286V4.21429C14.0002 4.30623 13.9709 4.39616 13.916 4.47266C13.8611 4.54917 13.7829 4.6088 13.6915 4.64401C13.6 4.67922 13.4993 4.68842 13.4022 4.67044C13.3051 4.65245 13.2159 4.6081 13.146 4.543L12.104 3.57357L7.707 7.6565C7.5184 7.82565 7.26579 7.91924 7.0036 7.91713C6.7414 7.91501 6.49059 7.81735 6.30518 7.64519C6.11977 7.47302 6.0146 7.24013 6.01233 6.99666C6.01005 6.75319 6.11084 6.51863 6.293 6.3435L10.689 2.26057L9.646 1.293C9.57612 1.22802 9.52856 1.14526 9.50933 1.05518C9.49011 0.965095 9.50008 0.871744 9.538 0.786929Z"
                        fill="#00FFFF"
                      />
                    </svg>
                  </div>
                </div>
              </div>
            </div>

            <button
              name="next"
              class="pink_button max-w-[160px] text-[15px] font-bold px-7 py-4"
            >
              Продолжить
            </button>
          </div>
          <div class="content flex flex-col">
            <div class="flex gap-3 items-center">
              <svg
                width="15"
                height="15"
                viewBox="0 0 15 15"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M7.5 0C8.49456 0 9.44839 0.395088 10.1517 1.09835C10.8549 1.80161 11.25 2.75544 11.25 3.75C11.25 4.74456 10.8549 5.69839 10.1517 6.40165C9.44839 7.10491 8.49456 7.5 7.5 7.5C6.50544 7.5 5.55161 7.10491 4.84835 6.40165C4.14509 5.69839 3.75 4.74456 3.75 3.75C3.75 2.75544 4.14509 1.80161 4.84835 1.09835C5.55161 0.395088 6.50544 0 7.5 0ZM7.5 9.375C11.6438 9.375 15 11.0531 15 13.125V15H0V13.125C0 11.0531 3.35625 9.375 7.5 9.375Z"
                  fill="white"
                />
              </svg>
              <span class="text-white text-xl font-semibold">
                Подтверждение заказа
              </span>
            </div>
            <span class="text-gray font-normal text-base mb-5">
              Проверьте детали перед оплатой, а так же выберите удобный способ.
            </span>
            <div class="flex gap-3">
              <div class="flex py-4 px-2 flex-1 bg-bg rounded-xl gap-5">
                <img src="/assets/img/avatar.png" id="avatarReadyTransaction" class="rounded-xl max-w-[48px] max-h-[49px]" alt="" />
                <div class="flex flex-col gap-2">
                  <span class="text-white font-bold text-base" id="nicknameReadyTransaction"></span>
                  <span class="text-white font-medium text-xs">GamePass</span>
                </div>
              </div>
              <div class="flex py-4 px-4 flex-1 bg-bg rounded-xl  gap-5 items-center justify-between">
                <span class="text-white whitespace-nowrap" id="price"
                  >1000 <span class="text-gray">руб.</span></span
                >
                <div
                  class="flex items-center rounded-xl justify-center w-full bg-green-light"
                >
                  <span class="text-green-light2" id="price2">1000 R$</span>
                </div>
              </div>
            </div>
            <span class="text-gray font-medium text-sm mb-4 mt-4"> Выберите способ оплаты:</span>
            <div class="flex gap-3 mb-3">
              <div class="flex flex-1 px-8 py-6 items-center justify-center gap-3 border-bg-bg border-2 rounded-xl max-h-[87px]">
                <img src="/assets/img/gamemoney.png" class="max-w-[60px] max-h-[34px]" alt="">
                <span class="text-white font-bold text-[22px]">
                  GameMoney
                </span>
              </div>
              <div class="flex flex-1 px-8 py-4 items-center justify-center gap-3 rounded-xl bg-second relative max-h-[87px]">
                <img src="/assets/img/payok.png" class="max-w-[130px]" alt="">
                <div class="absolute top-[10px] right-[10px]">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9 18C10.1819 18 11.3522 17.7672 12.4442 17.3149C13.5361 16.8626 14.5282 16.1997 15.364 15.364C16.1997 14.5282 16.8626 13.5361 17.3149 12.4442C17.7672 11.3522 18 10.1819 18 9C18 7.8181 17.7672 6.64778 17.3149 5.55585C16.8626 4.46392 16.1997 3.47177 15.364 2.63604C14.5282 1.80031 13.5361 1.13738 12.4442 0.685084C11.3522 0.232792 10.1819 -1.76116e-08 9 0C6.61305 3.55683e-08 4.32387 0.948211 2.63604 2.63604C0.948212 4.32387 0 6.61305 0 9C0 11.3869 0.948212 13.6761 2.63604 15.364C4.32387 17.0518 6.61305 18 9 18ZM13.768 6.64C13.8558 6.53964 13.9226 6.42274 13.9646 6.29617C14.0065 6.1696 14.0227 6.03591 14.0123 5.90298C14.0018 5.77006 13.9648 5.64056 13.9036 5.52213C13.8423 5.40369 13.758 5.29871 13.6555 5.21334C13.5531 5.12798 13.4346 5.06396 13.3071 5.02506C13.1796 4.98616 13.0455 4.97316 12.9129 4.98683C12.7802 5.00049 12.6517 5.04055 12.5347 5.10463C12.4178 5.16872 12.3149 5.25554 12.232 5.36L8.634 9.677C8.287 10.093 8.092 10.324 7.937 10.465L7.931 10.471L7.924 10.466C7.756 10.339 7.541 10.127 7.159 9.744L5.707 8.293C5.5184 8.11084 5.2658 8.01005 5.0036 8.01233C4.7414 8.0146 4.49059 8.11977 4.30518 8.30518C4.11977 8.49059 4.0146 8.7414 4.01233 9.0036C4.01005 9.2658 4.11084 9.5184 4.293 9.707L5.744 11.158L5.785 11.199C6.112 11.526 6.425 11.84 6.718 12.061C7.045 12.309 7.474 12.541 8.023 12.517C8.573 12.492 8.979 12.221 9.283 11.945C9.553 11.698 9.838 11.357 10.133 11.002L10.17 10.958L13.768 6.64Z" fill="#FF00F5"/>
                    </svg>
                </div>
              </div>
            </div>
            <button
              name="createTransaction"
              class="pink_button max-w-[160px] text-[15px] font-bold px-7 py-4"
            >
              Продолжить
            </button>
          </div>
          <style>
            .content {
              display: none;
            }
            .content.active {
              display: flex;
            }
          </style>
          
          <script>
            
            const contents = document.querySelectorAll(".content");
            const nextButtons = document.querySelectorAll("[name=next]");
            let currentStep = 0;
            nextButtons.forEach((nextButton) => {
              nextButton.addEventListener("click", () => {
                console.log(currentStep)
               if(currentStep == 0){
                  var activeUser = document.querySelector(".user_account.active");
                  if(!activeUser){
                    alert("Выберите аккаунт")
                    return;
                  }
                  var nicknameReadyTransaction = document.getElementById("nicknameReadyTransaction");
                  var avatarReadyTransaction = document.getElementById("avatarReadyTransaction");

                  nicknameReadyTransaction.innerHTML = activeUser.dataset.nickname;
                  if(activeUser.dataset.avatar)
                    avatarReadyTransaction.src = activeUser.dataset.avatar;
                  
                  var places = document.querySelector(".places");
                  places.innerHTML = "<div class='loading'></div>"
                  $.ajax({
                    url: "{{ route('api.getPlaces') }}",
                    type: "POST",
                    data: {
                      _token: "{{ csrf_token() }}",
                      userId: activeUser.dataset.userid,
                    },
                    success: function(data) {
                      console.log(data)
                      if(data.status){
                        places.innerHTML = ""
                        data.places.forEach((place) => {
                        var placeElement = document.createElement("div");
                        placeElement.classList.add("place");
                        placeElement.dataset.placeid = place.id;
                        placeElement.innerHTML = `
                        <img src="${place.photo}" class="max-w-[143px] max-h-[143px] w-full h-full" alt="">
                        <div class="flex border-t py-4 bg-second w-full items-center justify-center">
                          <span class="text-white"> ${place.name} </span>
                        </div>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10 17.5C10.9849 17.5 11.9602 17.306 12.8701 16.9291C13.7801 16.5522 14.6069 15.9997 15.3033 15.3033C15.9997 14.6069 16.5522 13.7801 16.9291 12.8701C17.306 11.9602 17.5 10.9849 17.5 10C17.5 9.01509 17.306 8.03982 16.9291 7.12987C16.5522 6.21993 15.9997 5.39314 15.3033 4.6967C14.6069 4.00026 13.7801 3.44781 12.8701 3.0709C11.9602 2.69399 10.9849 2.5 10 2.5C8.01088 2.5 6.10322 3.29018 4.6967 4.6967C3.29018 6.10322 2.5 8.01088 2.5 10C2.5 11.9891 3.29018 13.8968 4.6967 15.3033C6.10322 16.7098 8.01088 17.5 10 17.5ZM13.9733 8.03333C14.0465 7.9497 14.1022 7.85228 14.1372 7.74681C14.1721 7.64133 14.1856 7.52993 14.1769 7.41915C14.1682 7.30838 14.1374 7.20047 14.0863 7.10177C14.0353 7.00308 13.965 6.91559 13.8796 6.84445C13.7943 6.77332 13.6955 6.71997 13.5892 6.68755C13.483 6.65514 13.3713 6.6443 13.2607 6.65569C13.1502 6.66708 13.0431 6.70046 12.9456 6.75386C12.8482 6.80727 12.7624 6.87962 12.6933 6.96667L9.695 10.5642C9.40583 10.9108 9.24333 11.1033 9.11417 11.2208L9.10917 11.2258L9.10333 11.2217C8.96333 11.1158 8.78417 10.9392 8.46583 10.62L7.25583 9.41083C7.09866 9.25904 6.88816 9.17504 6.66967 9.17694C6.45117 9.17884 6.24216 9.26648 6.08765 9.42098C5.93314 9.57549 5.8455 9.7845 5.8436 10.003C5.84171 10.2215 5.9257 10.432 6.0775 10.5892L7.28667 11.7983L7.32083 11.8325C7.59333 12.105 7.85417 12.3667 8.09833 12.5508C8.37083 12.7575 8.72833 12.9508 9.18583 12.9308C9.64417 12.91 9.9825 12.6842 10.2358 12.4542C10.4608 12.2483 10.6983 11.9642 10.9442 11.6683L10.975 11.6317L13.9733 8.03333Z" fill="white"></path>
                        </svg>`;
                        places.appendChild(placeElement);
                        });
                        var placesBlocks = document.querySelectorAll(".place");

                        placesBlocks.forEach((place) => {
              place.addEventListener("click", () => {
                placesBlocks.forEach((place) => {
                  place.classList.remove("active");
                });
                place.classList.add("active");
              });
            });
                      }
                    } 
                  })
                }
               
                
                if (currentStep < contents.length - 1) {
                  contents[currentStep].classList.remove("active");
                  currentStep++;
                  contents[currentStep].classList.add("active");
                }
                console.log(currentStep)
              });
            });
          </script>
         
        </div>

        <div class="relative right-[40px] top-[10px]">
          <button id="close" class="pink_button absolute px-[11px] py-[6px]">
            X
          </button>
        </div>
      </div>
    </div>
    <script>
            function openCreateTransaction(modal) {
              var inputRub = document.querySelector('input[name="input"]');
              var outputRobux = document.querySelector('input[name="output"]');
              
              var price = document.getElementById("price");
              var price2 = document.getElementById("price2");
              var price3 = document.getElementById("price3");
              var price4 = document.getElementById("price4");
              var price5 = document.getElementById("copy");

              price.innerHTML = inputRub.value + " руб.";
              price2.innerHTML = outputRobux.value + " R$";
              price3.innerHTML = outputRobux.value + " R$";
              price4.innerHTML = outputRobux.value + " R$";
              
              price5.dataset.value = outputRobux.value;
              
              
              openModal(modal)
              
            }

            var createTransactionButton = document.querySelector('button[name="createTransaction"]');
            
            createTransactionButton.addEventListener("click", function() {
              $.ajax({
                url:"{{route('api.createTransaction')}}",
                type: "POST",
                data: {
                  input: document.querySelector('input[name="input"]').value,
                  output: document.querySelector('input[name="output"]').value,
                  _token: "{{ csrf_token() }}",
                  nickname: document.getElementById("nicknameReadyTransaction").innerHTML,
                  userId: document.querySelector(".user_account.active").dataset.userid,
                  avatar: document.getElementById("avatarReadyTransaction").src,
                  placeId: document.querySelector(".place.active").dataset.placeid,
                },
                success: function(data) {
                  console.log(data)
                  
                  if(data.status){
                    window.location.href = data.url;
                  }
              
              }})
            });
          </script>
    <script src="/assets/js/modal.js"></script>
    <script src="/assets/js/inputs.js"></script>
  </body>
</html>
