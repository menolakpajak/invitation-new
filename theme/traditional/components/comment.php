<?php

function generateComment(array $comment)
{
    $status = ($comment['status'] == "hadir" ? "Saya akan hadir" : ($comment['status'] == "ragu" ? "Masih ragu" : "Maaf, saya berhalangan hadir"));

    return <<<cmt
    <div class="relative w-full flex flex-col  phone:text-sm">
        <div class="p-6 bg-[var(--primary-btn)] text-white rounded-md overflow-hidden relative">
            <box-icon color='#ffffff' class="text-white phone:scale-50 scale-[.6] absolute left-2 top-2" name='quote-alt-left' type='solid' ></box-icon>
            <box-icon color='#ffffff' class="text-white phone:scale-50 scale-[.6] absolute right-2 bottom-2" name='quote-alt-right' type='solid' ></box-icon>
            {$comment["body"]}
        </div>
        <div class="border-t-[14px] border-r-[20px] border-t-[var(--primary-btn)] border-r-transparent ml-4 mr-auto"></div>
        <div class="font-bold">{$comment["author"]}, <span class="font-normal italic">{$status}</span></div>
    </div>
    cmt;
}
