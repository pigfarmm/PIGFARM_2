package com.example.admin.pigfarm.ManageData_Page;

import android.content.Context;
import android.support.annotation.NonNull;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import com.example.R;

import java.util.List;

public class Event_Adapter extends RecyclerView.Adapter<Event_Adapter.EventViewHolder>{

    private Context Eventdata;
    private List<Event_items> itemsList;

    public Event_Adapter(Context Eventdata, List<Event_items> itemsList){
        this.Eventdata = Eventdata;
        this.itemsList = itemsList;
    }

    @NonNull
    @Override
    public Event_Adapter.EventViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        LayoutInflater inflater = LayoutInflater.from(Eventdata);
        View view = inflater.inflate(R.layout.listevent_content, null);
        return new Event_Adapter.EventViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull Event_Adapter.EventViewHolder holder, int position) {
        Event_items event_items = itemsList.get(position);

        holder.eventdata_name.setText(event_items.getEventname());
        holder.eventdata_recorddate.setText(event_items.getEvent_recorddate());
    }

    @Override
    public int getItemCount() {
        return itemsList.size();
    }

    class EventViewHolder extends RecyclerView.ViewHolder{
        TextView eventdata_name, eventdata_recorddate;

        public EventViewHolder(View itemView){
            super(itemView);

            eventdata_name = itemView.findViewById(R.id.eventdata_name);
            eventdata_recorddate = itemView.findViewById(R.id.eventdata_recorddate);
        }
    }
}
