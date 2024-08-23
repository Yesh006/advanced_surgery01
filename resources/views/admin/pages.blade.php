@extends('layouts.admin')
@section('title','Admin - Page Settings')
@section('menu','is-sidebar-open')
@section('sidebar')
    @include('sidebars.page')
@endsection
@section('content')
      <!-- Main Content Wrapper -->
      <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Pages
          </h2>
          <div class="hidden h-full py-1 sm:flex">
            <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
          </div>
          <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                href="/admin"
                >Admin</a
              >
              <svg
                x-ignore
                xmlns="http://www.w3.org/2000/svg"
                class="size-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </li>
            <li>Pages</li>
            
          </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Abstracts Table -->
          <div>
            
            <div class="card mt-3">
              <div
                class="is-scrollbar-hidden min-w-full overflow-x-auto"
                x-data="pages.tables.initExample1"
                >
                <table class="is-hoverable w-full text-left">
                  <thead>
                    <tr>
                      <!-- <th
                        class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        #
                      </th> -->
                      <th
                        class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Title
                      </th>
                      <th
                        class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($pages as $item)
                      <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
                        <td
                          class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 dark:text-navy-100 lg:px-5"
                        >{{ $item->name }}</td>
                        <td class="gridjs-td">
                          <div class="flex justify-center space-x-2">
                            <a href="pages/{{ $item->id }}" class="btn size-8 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                <i class="fa fa-edit"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>

            </div>
          </div>

        </div>
      </main>
@endsection