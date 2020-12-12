@extends("layouts.app")

@section("title", "License")

@section("content")
    <div class="row">
        <div class="jumbotron single-page">
            <h1 class="display-4">MIT License</h1>
            <p class="lead">Copyright (C) 2019 ~ {{ date('Y') }} nfangxu</p>
            <hr class="my-4">
            <p>
                Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
                associated documentation files (the "Software"), to deal in the Software without restriction, including
                without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the
                following conditions:
            </p>
            <p>
                The above copyright notice and this permission notice shall be included in all copies or substantial
                portions of the Software.
            </p>
            <p>
                THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT
                LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
                NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
                WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
                SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
            </p>
            <p>
                特此授予获得此软件副本的任何人免费的许可，以及相关的文档文件（“软件”），可以不受限制地处理软件，
                包括但不限于使用，复制，修改，合并，发布，分发，再许可和/或出售的权利软件的副本，并允许提供软件的人员这样做，
                但须遵守以下条件：
            </p>
            <p>
                上述版权声明和本许可声明应包括在所有副本中或软件的各个部分。
            </p>
            <p>
                本软件按“原样”提供，不提供任何形式的明示或暗示担保，包括但不限于仅限于对适销性，特殊目的适用性和非侵权性的担保。
                在任何情况下，作者或版权持有人均不对任何索赔，损害或其他责任负责，
                无论是因合同，侵权或其他形式的诉讼而引起，与之相关或与之相关软件或软件中的使用或其他处理。
            </p>
            <p class="text-right">
                <a class="btn btn-outline-primary" href="{{ route('') }}">Home</a>
            </p>
        </div>
    </div>
@stop

