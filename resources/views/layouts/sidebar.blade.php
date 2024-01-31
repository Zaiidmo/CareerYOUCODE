<aside id="sidebar" class="fixed z-30 top-16 left-0 lg:w-72 shadow-md h-screen py-3 flex bg-gray-800 opacity-75 " aria-label="Sidebar">
    <ul class="space-y-2 w-full px-2 font-medium mt-16">
        <li>
            <a href="Home" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 2.293C12.5196 2.10553 12.2652 2.00021 12.0001 2.00021C11.7349 2.00021 11.4806 2.10553 11.2931 2.293L4.29308 9.293L2.29308 11.293C2.19757 11.3852 2.12139 11.4956 2.06898 11.6176C2.01657 11.7396 1.98898 11.8708 1.98783 12.0036C1.98668 12.1364 2.01198 12.2681 2.06226 12.391C2.11254 12.5139 2.18679 12.6255 2.28069 12.7194C2.37458 12.8133 2.48623 12.8875 2.60913 12.9378C2.73202 12.9881 2.8637 13.0134 2.99648 13.0123C3.12926 13.0111 3.26048 12.9835 3.38249 12.9311C3.50449 12.8787 3.61483 12.8025 3.70708 12.707L4.00008 12.414V19C4.00008 19.7956 4.31615 20.5587 4.87876 21.1213C5.44137 21.6839 6.20443 22 7.00008 22H17.0001C17.7957 22 18.5588 21.6839 19.1214 21.1213C19.684 20.5587 20.0001 19.7956 20.0001 19V12.414L20.2931 12.707C20.4817 12.8892 20.7343 12.99 20.9965 12.9877C21.2587 12.9854 21.5095 12.8802 21.6949 12.6948C21.8803 12.5094 21.9855 12.2586 21.9878 11.9964C21.99 11.7342 21.8892 11.4816 21.7071 11.293L12.7071 2.293Z" fill="#ABB2BF" />
                </svg>

                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                </svg>
                <span class="ms-3">Home</span>
            </a>
        </li>
        <li>
            <a href="Profile" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10C8 8.93913 8.42143 7.92172 9.17157 7.17157C9.92172 6.42143 10.9391 6 12 6C13.0609 6 14.0783 6.42143 14.8284 7.17157C15.5786 7.92172 16 8.93913 16 10Z" fill="#ABB2BF" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.592 21.992C6.2585 21.778 2 17.386 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C11.9543 22.0003 11.9087 22.0003 11.863 22C11.7725 22 11.682 21.997 11.592 21.992ZM5.583 18.31C5.50823 18.0953 5.48278 17.8665 5.50854 17.6406C5.5343 17.4147 5.6106 17.1975 5.73179 17.0051C5.85298 16.8128 6.01593 16.6502 6.20856 16.5294C6.40119 16.4086 6.61855 16.3328 6.8445 16.3075C10.7425 15.876 13.2815 15.915 17.1605 16.3165C17.3868 16.3401 17.6046 16.4149 17.7976 16.5354C17.9905 16.6559 18.1534 16.8189 18.2739 17.0119C18.3943 17.2048 18.4691 17.4227 18.4927 17.649C18.5162 17.8753 18.4877 18.1039 18.4095 18.3175C20.072 16.6354 21.003 14.365 21 12C21 7.0295 16.9705 3 12 3C7.0295 3 3 7.0295 3 12C3 14.458 3.9855 16.686 5.583 18.31Z" fill="#ABB2BF" />
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span> -->
            </a>
        </li>
        <?php //if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') : ?>
            <li>
                <a href="dashboard" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H10V21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5ZM14 3H20C20.5304 3 21.0391 3.21071 21.4142 3.58579C21.7893 3.96086 22 4.46957 22 5V10H14V3ZM14 14H22V19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H14V14Z" stroke="#ABB2BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="flex-1 ms-3  whitespace-nowrap">Dashboard </span>
                    <!-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> -->
                </a>
            </li>
            <li>
                <a href="users" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4.354C12.5374 3.7447 13.2477 3.31351 14.0362 3.11779C14.8247 2.92208 15.6542 2.97112 16.4142 3.2584C17.1741 3.54568 17.8286 4.05757 18.2905 4.72596C18.7524 5.39435 18.9998 6.18754 18.9998 7C18.9998 7.81246 18.7524 8.60565 18.2905 9.27404C17.8286 9.94243 17.1741 10.4543 16.4142 10.7416C15.6542 11.0289 14.8247 11.0779 14.0362 10.8822C13.2477 10.6865 12.5374 10.2553 12 9.646M15 21H3V20C3 18.4087 3.63214 16.8826 4.75736 15.7574C5.88258 14.6321 7.4087 14 9 14C10.5913 14 12.1174 14.6321 13.2426 15.7574C14.3679 16.8826 15 18.4087 15 20V21ZM15 21H21V20C21.0001 18.9467 20.723 17.9119 20.1965 16.9997C19.6699 16.0875 18.9125 15.3299 18.0004 14.8032C17.0882 14.2765 16.0535 13.9992 15.0002 13.9992C13.9469 13.9991 12.9122 14.2764 12 14.803M13 7C13 8.06087 12.5786 9.07828 11.8284 9.82843C11.0783 10.5786 10.0609 11 9 11C7.93913 11 6.92172 10.5786 6.17157 9.82843C5.42143 9.07828 5 8.06087 5 7C5 5.93913 5.42143 4.92172 6.17157 4.17157C6.92172 3.42143 7.93913 3 9 3C10.0609 3 11.0783 3.42143 11.8284 4.17157C12.5786 4.92172 13 5.93913 13 7Z" stroke="#ABB2BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="flex-1 ms-3 whitespace-nowrap">Users Management</span>
                </a>
            </li>
            <li>
                <a href="companies" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.07 4.5L5.4075 5.1675L5.82 6H9V9.75H3V4.5H5.07ZM5.535 3H2.25C2.05109 3 1.86032 3.07902 1.71967 3.21967C1.57902 3.36032 1.5 3.55109 1.5 3.75V10.5C1.5 10.6989 1.57902 10.8897 1.71967 11.0303C1.86032 11.171 2.05109 11.25 2.25 11.25H9.75C9.94891 11.25 10.1397 11.171 10.2803 11.0303C10.421 10.8897 10.5 10.6989 10.5 10.5V5.25C10.5 5.05109 10.421 4.86032 10.2803 4.71967C10.1397 4.57902 9.94891 4.5 9.75 4.5H6.75L6.21 3.4125C6.1471 3.28767 6.05058 3.18291 5.93131 3.11002C5.81204 3.03713 5.67477 2.99903 5.535 3ZM17.07 4.5L17.4075 5.1675L17.82 6H21V9.75H15V4.5H17.07ZM17.535 3H14.25C14.0511 3 13.8603 3.07902 13.7197 3.21967C13.579 3.36032 13.5 3.55109 13.5 3.75V10.5C13.5 10.6989 13.579 10.8897 13.7197 11.0303C13.8603 11.171 14.0511 11.25 14.25 11.25H21.75C21.9489 11.25 22.1397 11.171 22.2803 11.0303C22.421 10.8897 22.5 10.6989 22.5 10.5V5.25C22.5 5.05109 22.421 4.86032 22.2803 4.71967C22.1397 4.57902 21.9489 4.5 21.75 4.5H18.75L18.21 3.4125C18.1471 3.28767 18.0506 3.18291 17.9313 3.11002C17.812 3.03713 17.6748 2.99903 17.535 3ZM5.07 14.25L5.4075 14.9175L5.82 15.75H9V19.5H3V14.25H5.07ZM5.535 12.75H2.25C2.05109 12.75 1.86032 12.829 1.71967 12.9697C1.57902 13.1103 1.5 13.3011 1.5 13.5V20.25C1.5 20.4489 1.57902 20.6397 1.71967 20.7803C1.86032 20.921 2.05109 21 2.25 21H9.75C9.94891 21 10.1397 20.921 10.2803 20.7803C10.421 20.6397 10.5 20.4489 10.5 20.25V15C10.5 14.8011 10.421 14.6103 10.2803 14.4697C10.1397 14.329 9.94891 14.25 9.75 14.25H6.75L6.21 13.1625C6.1471 13.0377 6.05058 12.9329 5.93131 12.86C5.81204 12.7871 5.67477 12.749 5.535 12.75ZM17.07 14.25L17.4075 14.9175L17.82 15.75H21V19.5H15V14.25H17.07ZM17.535 12.75H14.25C14.0511 12.75 13.8603 12.829 13.7197 12.9697C13.579 13.1103 13.5 13.3011 13.5 13.5V20.25C13.5 20.4489 13.579 20.6397 13.7197 20.7803C13.8603 20.921 14.0511 21 14.25 21H21.75C21.9489 21 22.1397 20.921 22.2803 20.7803C22.421 20.6397 22.5 20.4489 22.5 20.25V15C22.5 14.8011 22.421 14.6103 22.2803 14.4697C22.1397 14.329 21.9489 14.25 21.75 14.25H18.75L18.21 13.1625C18.1471 13.0377 18.0506 12.9329 17.9313 12.86C17.812 12.7871 17.6748 12.749 17.535 12.75Z" fill="#ABB2BF" />
                    </svg>

                    <span class="flex-1 ms-3  whitespace-nowrap">Companies</span>
                    <!-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> -->
                </a>
            </li>
            <li>
                <a href="announcements" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_21_396)">
                            <path d="M20.385 3.53691L20.975 4.12691C21.788 4.94091 21.665 6.38391 20.698 7.34991L8.531 19.5169L4.589 20.9589C4.094 21.1409 3.612 20.9049 3.514 20.4339C3.48088 20.2631 3.49647 20.0863 3.559 19.9239L5.029 15.9479L17.162 3.81391C18.129 2.84791 19.572 2.72291 20.385 3.53691ZM8 4.74691C8.13132 4.74691 8.26136 4.77278 8.38268 4.82303C8.50401 4.87329 8.61425 4.94694 8.70711 5.0398C8.79996 5.13266 8.87362 5.2429 8.92388 5.36423C8.97413 5.48555 9 5.61559 9 5.74691C9 5.87823 8.97413 6.00827 8.92388 6.12959C8.87362 6.25092 8.79996 6.36116 8.70711 6.45402C8.61425 6.54688 8.50401 6.62053 8.38268 6.67079C8.26136 6.72104 8.13132 6.74691 8 6.74691H4C3.46957 6.74691 2.96086 6.95762 2.58579 7.3327C2.21071 7.70777 2 8.21648 2 8.74691V20.7469C2 21.2773 2.21071 21.7861 2.58579 22.1611C2.96086 22.5362 3.46957 22.7469 4 22.7469H16C16.5304 22.7469 17.0391 22.5362 17.4142 22.1611C17.7893 21.7861 18 21.2773 18 20.7469V16.7469C18 16.4817 18.1054 16.2273 18.2929 16.0398C18.4804 15.8523 18.7348 15.7469 19 15.7469C19.2652 15.7469 19.5196 15.8523 19.7071 16.0398C19.8946 16.2273 20 16.4817 20 16.7469V20.7469C20 21.8078 19.5786 22.8252 18.8284 23.5753C18.0783 24.3255 17.0609 24.7469 16 24.7469H4C2.93913 24.7469 1.92172 24.3255 1.17157 23.5753C0.421427 22.8252 0 21.8078 0 20.7469V8.74691C0 7.68604 0.421427 6.66863 1.17157 5.91848C1.92172 5.16834 2.93913 4.74691 4 4.74691H8Z" fill="#ABB2BF" />
                        </g>
                        <defs>
                            <clipPath id="clip0_21_396">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <span class="flex-1 ms-3  whitespace-nowrap">Announcements</span>
                    <!-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> -->
                </a>
            </li>
        <!-- <?php //endif ?>
        <li>
            <a href="Wikis" class="flex items-center p-2 text--900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 1.5C9.9233 1.5 7.89323 2.11581 6.16652 3.26957C4.4398 4.42332 3.09399 6.0632 2.29927 7.98182C1.50455 9.90045 1.29661 12.0116 1.70176 14.0484C2.1069 16.0852 3.10693 17.9562 4.57538 19.4246C6.04383 20.8931 7.91476 21.8931 9.95156 22.2982C11.9884 22.7034 14.0996 22.4955 16.0182 21.7007C17.9368 20.906 19.5767 19.5602 20.7304 17.8335C21.8842 16.1068 22.5 14.0767 22.5 12C22.5 9.21523 21.3938 6.54451 19.4246 4.57538C17.4555 2.60625 14.7848 1.5 12 1.5ZM21 11.25H16.5C16.4125 8.48781 15.6969 5.78186 14.4075 3.3375C16.1839 3.82342 17.7685 4.84263 18.9474 6.25757C20.1263 7.6725 20.8427 9.41504 21 11.25ZM12 21C11.8327 21.0112 11.6648 21.0112 11.4975 21C9.94372 18.5221 9.08139 15.6736 9 12.75H15C14.9254 15.6715 14.0709 18.5199 12.525 21C12.3502 21.0123 12.1748 21.0123 12 21ZM9 11.25C9.07462 8.32851 9.92914 5.48012 11.475 3C11.809 2.96247 12.1461 2.96247 12.48 3C14.0417 5.4756 14.9119 8.3243 15 11.25H9ZM9.57001 3.3375C8.28848 5.78373 7.5806 8.48959 7.5 11.25H3C3.15728 9.41504 3.87371 7.6725 5.0526 6.25757C6.23149 4.84263 7.81608 3.82342 9.5925 3.3375H9.57001ZM3.0375 12.75H7.53751C7.61577 15.5098 8.32108 18.2156 9.60001 20.6625C7.82915 20.1714 6.25109 19.1499 5.07792 17.7354C3.90475 16.3209 3.19271 14.5811 3.0375 12.75ZM14.4075 20.6625C15.6969 18.2181 16.4125 15.5122 16.5 12.75H21C20.8427 14.585 20.1263 16.3275 18.9474 17.7424C17.7685 19.1574 16.1839 20.1766 14.4075 20.6625Z" fill="#ABB2BF" />
                </svg>

                <span class="flex-1 ms-3 whitespace-nowrap">Explore Wikis</span>
            </a>
        </li>
        <?php //if (isset($_SESSION['role']) && $_SESSION['role'] == 'author') : ?>
            <li>
                <a href="NewWiki" class="flex items-center p-2 text--900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#ABB2BF" d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8s-8-3.589-8-8s3.589-8 8-8m0-2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2m5 9h-4V7h-2v4H7v2h4v4h2v-4h4z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Post a new Wiki</span>
                </a>
            </li>
        <?php //elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'reader') : ?>
            <li>
                <a href="users/becomeAuthor" onclick=confirmUpdate() class="flex items-center p-2 text--900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#ABB2BF" d="m12.05 19l2.85-2.825l-2.85-2.825L11 14.4l1.075 1.075q-.7.025-1.362-.225t-1.188-.775q-.5-.5-.763-1.15t-.262-1.3q0-.425.113-.85t.312-.825l-1.1-1.1q-.425.625-.625 1.325T7 12q0 .95.375 1.875t1.1 1.65q.725.725 1.625 1.088t1.85.387l-.95.95zm4.125-4.25q.425-.625.625-1.325T17 12q0-.95-.363-1.888T15.55 8.45q-.725-.725-1.638-1.075t-1.862-.35L13 6.05L11.95 5L9.1 7.825l2.85 2.825L13 9.6l-1.1-1.1q.675 0 1.375.263t1.2.762q.5.5.763 1.15t.262 1.3q0 .425-.112.85t-.313.825zM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12q0-3.35-2.325-5.675T12 4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20m0-8" />
                    </svg>

                    <span class="flex-1 ms-3 whitespace-nowrap">Become an Author</span>
                </a>
            </li>
        <?php //elseif (!isset($_SESSION['role'])) : ?>
            <li>
                <a href="signup" onclick=confirmUpdate() class="flex items-center p-2 text--900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#ABB2BF" d="M15 14c-2.67 0-8 1.33-8 4v2h16v-2c0-2.67-5.33-4-8-4m-9-4V7H4v3H1v2h3v3h2v-3h3v-2m6 2a4 4 0 0 0 4-4a4 4 0 0 0-4-4a4 4 0 0 0-4 4a4 4 0 0 0 4 4" />
                    </svg>

                    <span class="flex-1 ms-3 whitespace-nowrap">Get Started Now</span>
                </a>
            </li>
        <?php //endif ?> -->
    </ul>

</aside>