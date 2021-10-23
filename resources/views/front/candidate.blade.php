@extends('master.layout')
@section('title', 'فهد القور')

@section('content')


<div class="overlay2" style="height: 50%;"></div>

<div class="container " style="margin-top: 300px; margin-bottom: 300px;">
    <!-- Candidate SECTION -->
    <section id="contact" style="height: 100%;">
     <div class="row mx-5">
         <div class="col-4 " style="padding: 25px;">
             <div class="card p-3">   
                 <div class="row mt-3">
                     <div class="d-flex justify-content-center col-12">
                     <img src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/4QDKRXhpZgAATU0AKgAAAAgABgESAAMAAAABAAEAAAEaAAUAAAABAAAAVgEbAAUAAAABAAAAXgEoAAMAAAABAAIAAAITAAMAAAABAAEAAIdpAAQAAAABAAAAZgAAAAAAAABIAAAAAQAAAEgAAAABAAeQAAAHAAAABDAyMjGRAQAHAAAABAECAwCgAAAHAAAABDAxMDCgAQADAAAAAQABAACgAgAEAAAAAQAABQCgAwAEAAAAAQAAA1WkBgADAAAAAQAAAAAAAAAAAAD/4gI0SUNDX1BST0ZJTEUAAQEAAAIkYXBwbAQAAABtbnRyUkdCIFhZWiAH4QAHAAcADQAWACBhY3NwQVBQTAAAAABBUFBMAAAAAAAAAAAAAAAAAAAAAAAA9tYAAQAAAADTLWFwcGzKGpWCJX8QTTiZE9XR6hWCAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAApkZXNjAAAA/AAAAGVjcHJ0AAABZAAAACN3dHB0AAABiAAAABRyWFlaAAABnAAAABRnWFlaAAABsAAAABRiWFlaAAABxAAAABRyVFJDAAAB2AAAACBjaGFkAAAB+AAAACxiVFJDAAAB2AAAACBnVFJDAAAB2AAAACBkZXNjAAAAAAAAAAtEaXNwbGF5IFAzAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHRleHQAAAAAQ29weXJpZ2h0IEFwcGxlIEluYy4sIDIwMTcAAFhZWiAAAAAAAADzUQABAAAAARbMWFlaIAAAAAAAAIPfAAA9v////7tYWVogAAAAAAAASr8AALE3AAAKuVhZWiAAAAAAAAAoOAAAEQsAAMi5cGFyYQAAAAAAAwAAAAJmZgAA8qcAAA1ZAAAT0AAACltzZjMyAAAAAAABDEIAAAXe///zJgAAB5MAAP2Q///7ov///aMAAAPcAADAbv/bAEMABgQEBQQEBgUFBQYGBgcJDgkJCAgJEg0NCg4VEhYWFRIUFBcaIRwXGB8ZFBQdJx0fIiMlJSUWHCksKCQrISQlJP/bAEMBBgYGCQgJEQkJESQYFBgkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJP/AABEIAJYAlgMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAACAAEEBQYDBwj/xAA9EAABAwMCBAMECQIEBwAAAAABAAIDBAUREiEGEzFBIlFhBzJxkRQjQlJigbHB0aHwCBUk4RYlMzRDcqL/xAAZAQEBAQEBAQAAAAAAAAAAAAAAAQIEAwX/xAAfEQEBAAICAwEBAQAAAAAAAAAAAQIRAzEEEiFBIlH/2gAMAwEAAhEDEQA/APQwjCEIgo0IIghCMIggjCEIwinwjahARNUDo2ocI2oHCIJAIkQgEQTJwhs4RJgiCoQTgJdk4QJJOkoM2EQQhEFQYRhCFX8RXun4ds9Rcal4a2JvhyCcu7Db1QWgU+jtc9UA4DS09Ce6+Vqr2h8RVdzjrp7nNJy362wFpEXoC0EAj4q/d7f+PCCIrgyIduXRs2+eVqY/6m30y6wFkD3EkuGDlR3UMbB4nacdyV8rXH2t8dXPIn4guLQ7q2N7Yh/8gLPVV+vNd/3Vxq5s9ebUvf8AurqD6f4v40tfCNNz5Joqwg4MMMzOYPyJ3Vbwl7V7HxZXiggZUUtQ4EtbOBh3oCCd1840dBX3B+imp5p3HtDCXH9FteHvZJxdX1MMj6CooYw4O5tQ7llo8w3qp6rt9IgJYQU8D6emiikeZHMYGmT75A6rpheYcJwkAnCqEEQCQRBUIBOEgnUCASThJUZkIwgCMIDCnQcF0HGNtqKW6Nc+lcQ3S04OrrnPbCgtWp4Rqg2CaDuHBwH9/BWdjFT/AOGvg2PDhLdXZ7fSB/C5Q+wHgKF2mSKrlcOrX1R/bCvvaPxZcrZCY48QxzEQsLDhw1HrlZFk8NkjbJJA6rqnjVoLv6klY5Ob0utOji8f3m7V/F7HuAqaOVkFkpHSCN2l80jnAHHqUobZwZYrTFM3h2jlqXNzy4YGn5k9Fh6nj29vuDaaOlttJG7ADNWp5/NQ/aVdbtS2mGRtQYWvLQ7lZHXbc9gvK+RluSPXHxsdbu2ml9qbbZLyqewUdPHnADZRn+gWksPHP/EtVHSyMpaapd/02OJ+sHkD5+i+dYeH2x18VJ9fWVEsfO176cdsEndXQqqwUEMlOZIK2jmZNC49fC7z/Nekzu/tYy45r5H0lJTGImOQANdvgfZPooUkZieWu6hS+Gr0OJrNDUyBvPDRzAOxUqtoA+ndKweJgyfgvS6s3HNZZdVUhOEwThZiCCIIQiCocJ0wToHSThJBmAiCFEEHRqtuHqgwXBjez/CVUhSaKXk1cT/J4SCt9sMzebaIXDAfXRZ+AOf4UK4Whl4p3NJcxxHVuyf2u0lReOI7TSwM1RUkUlVL49J1Yw344O+F04cujKuljcerveHkuLy7/T6niTWP1nKXgCFl5NYxgYHEOkdnV07Nz0Wiuttp6yiAmhbLTn6t7XDIcCpNxrRDOGAtbGBl5JxssxeuIbq6hqKeny4OdljizSxgxsvCe2V26tY4zUZ6mttNS3+amjdNG6nd9W2XOdPYjPZaW52Cmk4XrqrQGzQwucwt9AvO6SouEV5hr7rUTVMgiMLS54dpGc42+K9KpbiKjh91O/8A8rHN/IhdOtZOTLKXBK9k17mp6Wm5/wBuPQ7fr4jgr1x2DC9zBlsjSMeuF4pZKIWGeOibLzRGG+LGM5GV7HaZ+dRN1H7IK7MJ80+fyXeW1AkneAHuA6ZKYKMCCIIQiCBwiwhCJA4SSCSDLhGEARBB0C6MOHAjsVzajYfEM9EEDj2Sqo7uy5wxBwEYaA7o4YWL4fuE1LKQ7wuc7JHYr2Tii3RV1tYdIxpGPRedXPhZ0lqNXAx3MgkwS37pWebimWO3Rw8tlkK5f8wcwtl5RIznAOCPRUV8omw0w+lT1VY49mk4I+AxhC+sqIg3mtJczt5rpX8X0UNGGspmySgdCN1xzDKdPoTmx/Wfo6G2sa5zaARzDPjI3wry3TOMNPC/q4BuPL+ws9PeJaysbymNaw7kY6K9tzHO5YALpsgkD7I7le+OPW3LyZ7tk6XrWmSvD29CcL1C0Oey1hzttLTj1XndrpebUxj1C9Phha23hmMgDBHoumdOK1SJwptZbXwN5sYLoz82/FQ1lDoghCIIHCIIQiCAgkkEkGWCIIAjCA2owgCsKK0VVaHOZGQ1oyc9T8Ek2NBvW2aHSC5xZjA811sFr+jR8qYNc6QanMIzt0XaywGi5dPrMjcb/mpzJAy56AB7hH6L1RUXT2Z2C6ZeIpKV53JhdgfIrHXf2GUsgfJBdHNAGfHCCf1XrBqmMZlwIb5jsuFW9skEgGd2nG3VYmMb98niFB7HmUsxdNdnvHblxBpHzJW6tPBdmsXD9cylh+vliIfUSu1Pd+fYegVqKSXqWgKpvz6l1CYmScuJx0v09fmtes/E9rWHstS+CYa2l4Y7SSOy9MttQyalBL8DG++Fn7FZqcF9LIAHP3DirikY+21IppmjB90+aumWkha2aBrwdTXBU9ytsTXameAOOAe2fIq8Y4RwjyXCaNk8bo3bscPks2DKyRuieWPGCElaTUjTFy6gnmsOkPHcHoq+ogdTyGN2MjuFixQIghCIICSTJIMsFYWu1T3OTTGMMHvOx0UKJjpZGsaMlxwAvSbPbG0NHHGzAcBvnuVZNiopeG4IoyWuDpBvk9V3gimhLpqYl0sXvxO6ub5jzVzURNJD3AxyN6PH97hRXao5W1AbiSI4eB0c09/gvSVEKKs5l5jDHbPZqwus0pivsbfMKI6AN4klljH1bI2OGPxE/wAIrw4x3yCQdB1VF2x4574XbtO6gVL322XSTqgcdgfs58kdZOYZoalp2OxUuvZHWUHM0hwxuFDaunfhxGgnDsHH6qFcqRtTQzRt3IySB+qm6sRMdnVkbO80VIwTSSA/aYQiM5QNM1CyVp+uhOD+Sv2tivNFpd4Zmjr3BVJbM010raN3TOoBWUQNNKJYztncLXYsKCWSSkfTz7TQ7H1HYo7dLzdcbtnNPRPCRUOErcCVux/E1RXl0Fflu2eqwrrdIi2B0jW5c0fPyUaaAXGjD2kOlYNi3ofRWNUBNQTZBIMbunwWc4buT+QWOAbJjwMP2W+Z8gs2K4btOCMIgpVypOS5srSS14B365UMFZBhJMCkgreGab6TdYyRlsfiP7L0mMANHZYngRrXT1WSNWluP6rcRtLWrc6Shk2ac+78wqmafkTtae2+PvM7/wA/kraVrQC7OAe4VDcWsbmJ79OTqif9x38HurBPdQiKqkLd+a1jQfhn+VErKcVFQ+X7pwFPtc5qqCOZ4w9jTGfiE8MINK043duVZRVThzqR8R6t3apFlq9QNLIdnjZFURYBVXI51NKyVuxY4Fa7iDp3OZUVNA73oX62D8J/3yp1F4J2H1wVU3+o/wAu4ittybkxT/Uvx08XQ/PHzVhBEKaplkY8kSHOnyKgh3al+i8QxTgYbK0tK6vOMhTr5Dz2wSgeLqPiq+d2W5VhXSjqjFK1wO6m1zQ+Rsw6EZVAZjHIN+6vOZzqWFrdy5TIiyoWCSnc09wvNYJ5bde6qncDoD8OPd5zs0fqvTKM8puPyWG9oNv+j3GKqjbhknicBtk9/wBlmLF3E03Kkc6RzS4jLXdsjy9PVVJBa4tOxGxXSz1r5omOecA4OOm3kpV1pwHCpjHgf19Cs5RUJJMCksjlwS7TcZCTtowfmt/zQwA9l55wi8NqpR3IH6rduBdC5ueo2K3OkHOHNBew5aerexWcvcT42lwaXwO3wd9PwKvI6gkaS7RJjoVEqi92oRtAlG5iPSQfh9VqKj8J1gkpKmnc/U5h1j4Ef7K9hb/pox+ELAPucVpuEVdB4ad7uVM3poJ8x2W+pJWzUkT2kEFowliI9UwYKqamHUCrapeHOLR2UAnTKA7odlcUqj4lbzLEHH3oHNcPTBypwmII+HVcuJonRWWt0t1Yic5o89lHpavTw5QVz26jJEwnHwV2NBI/6Ra2SdSw7qsqehI7qypGg2yYA7HxfDZU4eXyGM9hlIIL/E/Hqry1vEjOTn6xm4HmFRF4ExHkrbh5rpK58zhs1uB+aZdEWjqksIHkqvixzKu3xEgEh2FOqnDW/Hmqi5ZqZqalHWR6xFBFSfRqSIgbloKn0kzJoHQzEBrhjdSa1sbGhoYH48OM4AVaNcb2yNcwN+OMq37BEmjMMrmE5x0I7pKZcxz2RTtG/uuSXkrO8NSFlzaB9ppBXo9O7UwfBJJbnRezPhZOCx43adnDqFVV2uB4hldrB3a4bEJJLUGG40cfolRUjAeNMc+OkgPuu/8AYLQeze+S3SxUrJc6mNwT54SSVo0sZ1ve4+ZXOojD256EJJLKOE8YrbfNE8dWkf0VNwxtw/SwHxCPVHv+FxH7JJLURe0hxT1A7aVSZ0XPT5sSSVggZ1Vzm+q0dnbyYC77xJSSUyUMkw1lxBOVDkZ/qm1QJ5jBhvkEkldAZXu0cwE4Jxg+aqLlcHwMOpoez7TfNJJIGori62Tmmkc+WCVvNYDuWEY/Zw/qkkkvOxX/2Q==" 
                     width="200"
                     class="rounded-circle" alt="avatar">
                 </div>
                 <div class=" d-flex justify-content-center col-12 mt-3">
                     <h4 style="font-size: 20px;">فهد القور</h4>
                 </div>
                 <div class=" d-flex justify-content-center text-secondary col-12 mt2">
                     <h4 style="font-size: 15px; color: #999999;">محاضر</h4>
                 </div>
                 <div class=" d-flex justify-content-center col-12">
                     <h4 style="font-size: 15px; color: #999999;">{{ __('translate.Phone') }}: 966564943650</h4>
                 </div>
                 <div class=" d-flex justify-content-center col-12">
                     <h4 style="font-size: 15px; color: #999999;">{{ __('translate.Sector') }}: Teaching and Academics</h4>
                 </div>
                 <div class=" d-flex justify-content-center col-12">
                     <h4 style="font-size: 15px; color: #999999;">{{ __('translate.Salary') }}: £10,000.00 / {{ __('translate.Monthly') }}</h4>
                 </div>
                 <div class=" d-flex justify-content-center col-12">
                     <h4 style="font-size: 15px; color: #999999;">({{ __('translate.Age') }}: 35 {{ __('translate.Years') }})</h4>
                 </div>
                 <div class=" d-flex justify-content-center col-12">
                     <h4 style="font-size: 15px; color: #999999;">Hayy al Hamdaniyah, Jeddah, Makkah, Saudi Arabia</h4>
                 </div>
                 <div class=" d-flex justify-content-center col-12">
                     <h4 style="font-size: 15px; color: #37a000;"> {{ __('translate.MemberSince') }}, September 2, 2021</h4>
                 </div>
                 <div class="col-6 mt-3 d-flex justify-content-center" style="padding: 25px; font-size: 10px;">
                     <button onclick="window.location.href='#';" class="btn btn-outline-success" >
                         <i class="fas fa-download"></i> {{ __('translate.DownloadCV') }}
                     </button>
                 </div>
                 <div class="col-6 mt-3 d-flex justify-content-center" style="padding: 25px; font-size: 10px;">
                     <button onclick="window.location.href='#';" class="btn btn-outline-success" >
                        {{ __('translate.SaveCandidate') }}
                     </button>
                 </div>
                 <div class="col-12 d-flex justify-content-center my-3" style="font-size: 15px;">
                     <button onclick="window.location.href='#';" class="btn btn-success p-3" >
                         <i class="fab fa-whatsapp" ></i>  {{ __('translate.WhatsApp') }}
                     </button>
                 </div>
                 <div class="col-12 d-flex justify-content-center" style="font-size: 15px;">
                     <button onclick="window.location.href='#';" class="btn btn-outline-secondary rounded-circle p-3" >
                        {{ __('translate.Invite') }} 
                     </button>
                 </div>  
                 </div>
             </div>
             <div class=" d-flex justify-content-center col-12 mt-3 mb-3">
                 <h4 style="font-size: 20px;"> {{ __('translate.ContactForm') }}</h4>
             </div>
             <div class="card p-3">
                 <div class="row mt-3">
                         <div class=" d-flex justify-content-start col-12 mt-3">
                             <h4 style="font-size: 15px;">{{ __('translate.Name') }}: </h4>
                         </div>
                         <div class=" d-flex justify-content-start col-12">
                             <input type="text" name="name" id="name" class="form-control"
                             placeholder="root">
                         </div>
                         <div class=" d-flex justify-content-start col-12 mt-3">
                             <h4 style="font-size: 15px;">{{ __('translate.EmailAddress') }}: </h4>
                         </div>
                         <div class=" d-flex justify-content-start col-12">
                             <input type="text" name="email" id="email" class="form-control"
                             placeholder="info@qp.sa">
                         </div>
                         <div class=" d-flex justify-content-start col-12 mt-3">
                             <h4 style="font-size: 15px;">{{ __('translate.PhoneNumber') }}: </h4>
                         </div>
                         <div class=" d-flex justify-content-start col-12">
                             <input type="text" name="phone" id="phone" class="form-control"
                             placeholder="{{ __('translate.EnterYourPhoneNumber') }}">
                         </div>
                         <div class=" d-flex justify-content-start col-12 mt-3">
                             <h4 style="font-size: 15px;">{{ __('translate.Message') }}: </h4>
                         </div>
                         <div class=" d-flex justify-content-start col-12">
                             <textarea type="text" name="message" id="message" class="form-control"
                             placeholder="{{ __('translate.TypeYourMessagehere') }}"></textarea>
                         </div>
                         <div class=" d-flex justify-content-start col-12 mt-3">
                           <div class="form-check">
                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                             <label class="form-check-label" for="flexCheckDefault">
                                {{ __('translate.Agreement') }}<strong> {{ __('translate.TermsAndConditions') }}</strong>
                             </label>
                           </div>
                         </div>
                         <div class="col-12 d-flex justify-content-center my-3" style="font-size: 15px;">
                             <button onclick="window.location.href='#';" class="btn btn-info p-3" >
                                {{ __('translate.SENDNOW') }}
                             </button>
                         </div>
                 </div>
             </div> 
         </div>
     <div class="col-8" style=" padding: 25px;">
         <div class="card p-5">
         <div class="row">
             <div class=" d-flex justify-content-start col-12 mt-3">
                 <h4 style="font-size: 20px;">{{ __('translate.About') }} فهد القور </h4>
             </div>
             <div class=" d-flex justify-content-start col-4 mt-3">
                 <div class="row">
                     <div class="col-4">
                         <i class="fas fa-graduation-cap" style="color: green;"></i>
                     </div>
                     <div class="col-8" style="font-size: 20px;">
                         <div class="row">
                             <div class="col-12">
                                 <h4 style="font-size: 20px;">{{ __('translate.AcademicLevel') }}</h4>
                             </div>
                             <div class="col-12">
                                 <h4 style="font-size: 15px;">Master’s Degree</h4>
                             </div>
                         </div> 
                     </div>
                 </div>
             </div>
             <div class=" d-flex justify-content-start col-4 mt-3">
                 <div class="row">
                     <div class="col-4">
                         <i class="fas fa-user" style="color: green;"></i>
                     </div>

                     <div class="col-8" style="font-size: 20px;">
                         <div class="row">
                             <div class="col-12">
                                 <h4 style="font-size: 20px;">{{ __('translate.Age') }}</h4>
                             </div>
                             <div class="col-12">
                                 <h4 style="font-size: 15px;">33 - 37 {{ __('translate.Years') }}</h4>
                             </div>
                         </div> 
                     </div>
                 </div>
             </div>
             <div class=" d-flex justify-content-start col-4 mt-3">
                 <div class="row">
                     <div class="col-4">
                         <i class="fas fa-money-bill-wave" style="color: green;"></i>
                     </div>
                     <div class="col-8" style="font-size: 20px;">
                         <div class="row">
                             <div class="col-12">
                                 <h4 style="font-size: 20px;">{{ __('translate.Salary') }}</h4>
                             </div>
                             <div class="col-12">
                                 <h4 style="font-size: 15px;">1850</h4>
                             </div>
                         </div> 
                     </div>
                 </div>
             </div>
             <div class=" d-flex justify-content-start col-4 mt-3">
                 <div class="row">
                     <div class="col-4">
                         <i class="fas fa-venus-mars" style="color: green;"></i>
                     </div>
                     <div class="col-8" style="font-size: 20px;">
                         <div class="row">
                             <div class="col-12">
                                 <h4 style="font-size: 20px;">{{ __('translate.Gender') }}</h4>
                             </div>
                             <div class="col-12">
                                 <h4 style="font-size: 15px;">{{ __('translate.Male') }}</h4>
                             </div>
                         </div> 
                     </div>
                 </div>
             </div>
             <div class=" d-flex justify-content-start col-4 mt-3">
                 <div class="row">
                     <div class="col-4">
                         <i class="fas fa-network-wired" style="color: green;"></i>
                     </div>
                     <div class="col-8" style="font-size: 20px;">
                         <div class="row">
                             <div class="col-12">
                                 <h4 style="font-size: 20px;">{{ __('translate.Industry') }}</h4>
                             </div>
                             <div class="col-12">
                                 <h4 style="font-size: 15px;">Development</h4>
                             </div>
                         </div> 
                     </div>
                 </div>
             </div>
             <div class=" d-flex justify-content-start col-4 mt-3">
                 <div class="row">
                     <div class="col-4">
                         <i class="far fa-eye" style="color: green;"></i>
                     </div>
                     <div class="col-8" style="font-size: 20px;">
                         <div class="row">
                             <div class="col-12">
                                 <h4 style="font-size: 20px;">{{ __('translate.Viewed') }}</h4>
                             </div>
                             <div class="col-12">
                                 <h4 style="font-size: 15px;">8</h4>
                             </div>
                         </div> 
                     </div>
                 </div>
             </div>
             <div class="col-12 mt-5">
                 <i class="fas fa-graduation-cap" style="color: green;"></i>
                 <span style="font-size: 20px;">{{ __('translate.EDUCATION') }}</span>  
             </div>
             <div class="col-12">
                 <i class="fas fa-stream" style="font-size: 15px; color: green;"></i>
                 <span style="font-size: 15px; color: green;">Carson Newman University</span>  
             </div>
             <div class="col-12">
                 <span style="font-size: 15px; color: green;">2014 - 2016</span>
                 <span class="mx-3" style="font-size: 18px; color: black;">master</span>    
             </div>
             <div class="col-12 mt-5">
                 <i class="fas fa-language" style="color: green;"></i>
                 <span style="font-size: 20px;">{{ __('translate.LANGUAGES') }}</span>  
             </div>
             <div class="col-6">
                 <div class="row">
                     <div class="col-6">
                         <div style="font-size: 18px; color: black;">اللغة الإنجليوية</div>
                         <div style="font-size: 13px; color: black;">{{ __('translate.Proficient') }}</div>
                     </div>
                     <div class="col-6">
                         <i class="fas fa-circle" style="color: rgb(55, 160, 0);"></i>
                         <i class="fas fa-circle" style="color: rgb(55, 160, 0);"></i>
                         <i class="fas fa-circle" style="color: rgb(55, 160, 0);"></i>
                         <i class="fas fa-circle" style="color: rgb(55, 160, 0);"></i>
                     </div>
                 </div>
             </div>
                 <div class="col-6">
                     <div class="row">
                         <div class="col-6">
                             <div style="font-size: 18px; color: black;">اللغة العربية</div>
                             <div style="font-size: 13px; color: black;">{{ __('translate.Proficient') }}</div>
                         </div>
                     <div class="col-6">
                         <i class="fas fa-circle" style="color: rgb(55, 160, 0);"></i>
                         <i class="fas fa-circle" style="color: rgb(55, 160, 0);"></i>
                         <i class="fas fa-circle" style="color: rgb(55, 160, 0);"></i>
                         <i class="fas fa-circle" style="color: rgb(55, 160, 0);"></i>
                     </div>
                 </div>        
             </div>
             <div class="col-12 mt-5">
                 <span style="font-size: 20px;">Skills</span>  
             </div>
             <div class="col-12">
                 <div class="row">
                     <div class="col-3">
                         <a class="btn btn-secondary rounded-circle p-2 m-2" href="#" role="button">C# Language</a>
                     </div>
                     <div class="col-3">
                         <a class="btn btn-secondary rounded-circle p-2 m-2" href="#" role="button">React-native</a>
                     </div>
                     <div class="col-3">
                         <a class="btn btn-secondary rounded-circle p-2 m-2" href="#" role="button">Translation</a>
                     </div>
                 </div>
             </div>  
         </div>
         </div>
     </div>
 </div>
 </section>
 <!-- Candidate SECTION END -->
</div>


@endsection