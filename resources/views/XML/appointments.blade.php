<?xml version="1.0" encoding="UTF-8"?>
<TimeTable>
    @foreach($Record as $rec)
        <Record ID="{{$rec->id}}">
            <V ID="{{$rec->spec_id}}" S="{{$rec->beginning}}" DATE="{{$rec->created_at->timestamp + 10800}}"/>
            <U FIO="{{$rec->firstname}} {{$rec->lastname}}" P="{{$rec->phone}}" E="{{$rec->email}}"
               K="{{$rec->comment}}"/>
        </Record>
    @endforeach
</TimeTable>