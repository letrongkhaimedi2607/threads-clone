import { IComment } from "./comment";

export interface IThread {
    id: number;
    title: string;
    content: string;
    created_at: string;
    updated_at: string;
    comments: IComment[];
}
