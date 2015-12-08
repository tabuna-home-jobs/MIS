<? xml version = "1.0" encoding = "UTF-8"?>
<TimeTable>
    @foreach($Record as $rec)
        <Record ID="{{$rec->id}}">
            <PODR>{{$rec->subdivision}}</PODR>
            <SPEC>{{$rec->specialization}}</SPEC>
            <SOTR>{{$rec->name}}</SOTR>
            <V S="{{$rec->beginning}}" PO="{{$rec->end}}" BUSY="1"/>
            <U FIO="{{$rec->firstname}} {{$rec->lastname}}" P="{{$rec->email}}" E="{{$rec->email}}"
               K="{{$rec->comment}}"/>
        </Record>
    @endforeach
</TimeTable>